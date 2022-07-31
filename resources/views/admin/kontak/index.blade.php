<x-app-layout title="Kontak">

    <div class="container py-5 mt-3">
        <h1 class="welcome">Customer Service</h1>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            @foreach ($contacts as $contact)

                            <div class="card-body text-center mb-3">
                                <p class="card-text">{{ $contact->name }}</p>
                                <p class="card-text"><small>{{ $contact->email }}</small></p>
                                <button class="btn btn-primary" data-bs-target="#edit-{{ $contact->id }}" data-bs-toggle="modal">Lihat Detail</button>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <img src="{{asset('assets/images/kontak.png')}}" class="img-fluid img-contact">
                <h1>{{ $msg }}</h1>
                <p>Pesan</p>
            </div>
        </div>
    </div>

    @include('admin.kontak.detail')

    @include('sweetalert::alert')

</x-app-layout>
