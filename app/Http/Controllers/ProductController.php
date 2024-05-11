<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.content.product.list', compact('products'));
    }

    public function tambah()
    {
        return view('backend.content.product.formTambah');
    }

    public function prosesTambah(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'Product_Name' => 'required|string|max:255',
            'Price' => 'required|numeric|min:0',
            'Qty' => 'required|integer|min:0',
            'Description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'KategoriAA' => 'required|string|max:255',
        ]);

        // Proses penyimpanan data produk
        $product = new Product();
        $product->Product_Name = $validatedData['Product_Name'];
        $product->Price = $validatedData['Price'];
        $product->Qty = $validatedData['Qty'];
        $product->Description = $validatedData['Description'];
        $product->KategoriAA = $validatedData['KategoriAA'];

        // Proses upload gambar (jika ada)
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $product->image = str_replace('public/', '', $imagePath);
        }

        // Simpan data produk ke dalam database
        $product->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.content.product.formEdit', compact('product'));
    }

    public function prosesEdit(Request $request, $id)
    {
        try {
            // Temukan produk berdasarkan ID atau lempar pengecualian jika tidak ditemukan
            $product = Product::findOrFail($id);

            // Validasi data yang diterima dari form
            $validatedData = $request->validate([
                'Product_Name' => 'required|string|max:255',
                'Price' => 'required|numeric|min:0',
                'Qty' => 'required|integer|min:0',
                'Description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'KategoriAA' => 'required|string|max:255',
            ]);

            // Update data produk
            $product->Product_Name = $validatedData['Product_Name'];
            $product->Price = $validatedData['Price'];
            $product->Qty = $validatedData['Qty'];
            $product->Description = $validatedData['Description'];
            $product->KategoriAA = $validatedData['KategoriAA'];

            // Proses upload gambar (jika ada)
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('public/images');
                $product->image = str_replace('public/', '', $imagePath);
            }

            // Simpan perubahan data produk ke dalam database
            $product->save();

            // Redirect ke halaman lain atau tampilkan pesan sukses
            return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            // Tangani jika produk tidak ditemukan
            return redirect()->route('product.index')->with('error', 'Produk tidak ditemukan.');
        } catch (\Exception $e) {
            // Tangani kesalahan lainnya
            return redirect()->route('product.index')->with('error', 'Terjadi kesalahan saat memperbarui produk.');
        }
    }

    public function delete($id)
    {
        try {
            // Temukan produk berdasarkan ID atau lempar pengecualian jika tidak ditemukan
            $product = Product::findOrFail($id);

            // Lakukan soft delete pada produk
            $product->delete();

            // Redirect ke halaman lain atau tampilkan pesan sukses
            return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            // Tangani jika produk tidak ditemukan
            return redirect()->route('product.index')->with('error', 'Produk tidak ditemukan.');
        } catch (\Exception $e) {
            // Tangani kesalahan lainnya
            return redirect()->route('product.index')->with('error', 'Terjadi kesalahan saat menghapus produk.');
        }
    }
}
