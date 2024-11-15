@extends('admin._layouts.main')

@section('body')
    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
            <div class="text-gray-600">
                <p class="font-medium text-lg">Membuat Postingan</p>
                <p>Tolong buat postingan yang benar dan fakta!</p>
            </div>

            <form action="/admin/post" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="lg:col-span-2">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                        <div class="md:col-span-5">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" required />
                        </div>

                        <div class="md:col-span-5">
                            <label for="author">Author</label>
                            <input type="text" name="author" id="author"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" required />
                        </div>

                        <div class="md:col-span-5">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="h-20 border mt-1 rounded py-1 px-4 w-full bg-gray-50" cols="30"
                                rows="10" required></textarea>
                        </div>

                        <div class="col-span-full">
                            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Blog
                                Image</label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <svg id="label" class="mx-auto label h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                        <label for="image"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <img class="mb-2 w-full img-preview object-cover">
                                            <span id="label">Upload a file</span>
                                            <input onchange="previewImage()" id="image" name="image" type="file"
                                                class="sr-only">
                                        </label>
                                        <p class="pl-1" id="label">or drag and drop</p>
                                    </div>
                                    <p id="label" class=" text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-5 text-right">
                            <div class="inline-flex items-end">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                            </div>
                        </div>
            </form>

        </div>
    </div>
@endsection

<script>
    function previewImage() {
        const image = document.querySelector("#image");
        const imgPreview = document.querySelector(".img-preview");
        const label = document.getElementById("label");
        const label2 = document.querySelector(".label");

        // Menampilkan preview hanya jika file telah dipilih
        imgPreview.style.display = 'block';
        label.style.display = 'none';
        label2.style.display = 'none';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
