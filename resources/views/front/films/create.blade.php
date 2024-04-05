@extends('front.layouts.app')




@section('content')



    <div class="container">
        <h1>Film Ekle</h1>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                İşlem başarıyla tamamlandı.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif
        <form action="{{route('storeFilm')}}" method="post" class="mt-3" >
            @csrf
            <div class="row">
                <div class="mb-3 col-md-4 col-sm-6">
                    <label for="name" class="form-label">Film ismi</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-4 col-sm-6">
                    <label for="summary" class="form-label">Özet</label>
                    <input type="text" name="summary" class="form-control" id="summary">
                </div>
            </div>

            <label for="type" class="form-label">Tür</label>
            <div class="row">
                <div class="mb-3 col-md-4 col-sm-6">
                    <select name="type" id="type">
                        <option value="dizi">Dizi</option>
                        <option value="film">Film</option>
                    </select>
                </div>
            </div>
            <label for="category" class="form-label">Kategori</label>
            <div class="row">
                <div class="mb-3 col-md-4 col-sm-6">
                    <select name="category" id="category">
                        <option value="bilim-kurgu">Bilim Kurgu</option>
                        <option value="dram">Dram</option>
                        <option value="romantik">Romantik</option>
                        <option value="komedi">Komedi</option>
                        <option value="aksiyon">Aksiyon</option>

                        <!-- optionların devamı-->
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>

        </form>
    </div>

@endsection
