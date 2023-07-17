@extends('layouts.main')
@section('content')



<div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-2">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>AGENCE REGIONALE &amp; GUICHET</h1>
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

        <div class="page-title">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="card-header">Formulaire d'ajout d'un Visiteur</h4>
                    </div>
                    <hr>
                    <form action="{{ route('societe.store') }}" method="post" novalidate="novalidate">
                    @csrf
                        <div class="form-group text-center">

                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Nom & Prenoms</label>
                            <input id="cc-payment" name="nom_prenom" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Nom Agent</label>
                                    <input id="cc-exp" name="nom_agent" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Telephone</label>
                                <div class="input-group">
                                    <input id="x_card_code" name="telephone" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1" >Objet</label>
                                    <input id="cc-exp" name="objet" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Societé/Provenance</label>
                                <div class="input-group">
                                    <input id="x_card_code" name="societe" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Heure Arrivé</label>
                                    <input id="cc-exp" name="heure_arrive" type="time" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Heure depart</label>
                                <div class="input-group">
                                    <input id="x_card_code" name="heure_depart" type="time" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-folder-o"></i>&nbsp;
                                <span id="payment-button-amount">AJOUTER</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
</div>

         @endsection
