@extends('layouts.main')
@section('content')

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>AGENCE REGIONALE & GUICHET</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">AGENCE REGIONALE</a></li>
                                <li><a href="#">GUICHET</a></li>
                                <li class="active">AJOUTER</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p> Il est acctuellement {{  date ('h:i A') }}.</p>
    <div class="content">
        <div class="animated fadeIn">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Liste des Visiteurs</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th>Nom & Prenom</th>
                        <th>Telephone</th>
                        <th>Residence</th>
                        <th>Pièce Identité</th>
                        <th>Sexe</th>
                        <th>Objet visite</th>
                        <th>Service visiter</th>
                        <th>Heure Arrivée</th>
                        <th>Heure Depart</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($visiteur as $item)
                        <tr>
                            <td class="serial">{{ $item->id }}</td>
                            <td>{{ $item->nom_prenom }}</td>
                            <td>{{ $item->telephone }}</td>
                            <td>{{ $item->residence }}</td>
                            <td>{{ $item->piece }}</td>
                            <td>{{ $item->sexe }}</td>
                            <td>{{ $item->objet_visit }}</td>
                            <td>{{ $item->service_visit }}</td>
                            <td>{{ $item->heure_arrive }}</td>
                            <td>{{ $item->heure_depart }}</td>
                            <td>
                                <button id="payment-button" type="submit">
                                    <i class="fa fa-folder fa-lg"></i>&nbsp;
                                    Modifier</button>
                            </td>
                        </tr>
                    @empty
                         <td colspan="10">pas de visiteur renseigne</td>
                    @endforelse

                    </tbody>
                </table>
            </div>
            <!-- /.table-stats -->

        </div>
    </div>
    {{ $visiteur->links('pagination::bootstrap-4')}}
        </div>
    </div>

@endsection
