<x-master-layout>
    <div class="container pt-3">
        <div class="row">
            <div class="col-md-6">
                <br>
                <h3 class="fine">{{ $titre }}</h3> <br>
                <div class="card">
                    <div class="card-body">
                       @include('pages.backend.commandes._formulaire')
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</x-master-layout>