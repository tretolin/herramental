@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="col justify-content-center d-md-flex justify">
                <div class="col-md-4 p-0">
                    <div class="p-0 p-md-2">


                    <div class="">
                        <div class="select" >
                            <select class="select-text">
                            <option disabled selected>Período</option>
                            <option value="">Máquina 1</option>
                            <option value="">Máquina 2</option>
                            <option value="">Máquina 3</option>
                        </select>
                        <span class="select-bar"></span>
                    </div>
                    <!-- subir rds ec2 -->

                    </div>
                        <canvas class="m-auto p-2 p-md-4 chart" style="padding: 10px" id="chart" width="100%" height="100%"></canvas>

                        <div class="tooltip-el block-content size-18 mt-0 float-tooltip d-none d-md-none" style="">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex justify-content-between mb-1">
                                    <div>
                                        <div class="circle d-inline-block border-blue mr-1"></div>
                                        <a class="link-dark" href="#">Maquina 1</a>
                                    </div>
                                    <div>$3,400.00</div>
                                </li>
                                <li class="d-flex justify-content-between mb-1">
                                    <div>
                                        <div class="circle d-inline-block border-orange mr-1"></div>
                                        <a class="link-dark" href="#">Maquina 2</a>
                                    </div>
                                    <div>$3,400.00</div>
                                </li>
                                <li class="d-flex justify-content-between mb-1">
                                    <div>
                                        <div class="circle d-inline-block border-yellow mr-1"></div>
                                        <a class="link-dark" href="#">Maquina 1</a>
                                    </div>
                                    <div>$3,400.00</div>
                                </li>
                            </ul>
                        </div>
                        <div class="tooltip-el tooltip-frame d-none d-md-none"></div>
                        <div class="block-content text-blue size-18 line-height-20">
                            3 máquinas en renta
                        </div>
                    </div>
                </div>
                <div class="col-md-8 p-0">
                    <div class="block-content text-blue size-18 mb-4">
                        <div class="font-weight-bold size-24">$1,650.00</div>
                        <div class="d-block">Pagar antes de: 12/12/20</div>
                        <div class="d-block">
                            <a class="font-italic link-blue" href="#">Ver recibo</a>
                        </div>
                    </div>
                    <div class="block-content size-18 mt-2 d-none d-md-block">
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between mb-1">
                                <div>
                                    <div class="circle d-inline-block border-blue mr-1"></div>
                                    <a class="link-dark" href="#">Maquina 1</a>
                                </div>
                                <div>$3,400.00</div>
                            </li>
                            <li class="d-flex justify-content-between mb-1">
                                <div>
                                    <div class="circle d-inline-block border-orange mr-1"></div>
                                    <a class="link-dark" href="#">Maquina 2</a>
                                </div>
                                <div>$3,400.00</div>
                            </li>
                            <li class="d-flex justify-content-between mb-1">
                                <div>
                                    <div class="circle d-inline-block border-yellow mr-1"></div>
                                    <a class="link-dark" href="#">Maquina 1</a>
                                </div>
                                <div>$3,400.00</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div>
            <div class="col-12">
                <div class="mt-2 border ad-h d-none d-md-block">
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-3 px-0 mx-4 mt-4 mx-md-0 mt-md-0">
            <div class="pr-0">
                <button class="w-100 btn btn-primary size-14 text-uppercase btn-center">
                    Realizar pago
                </button>
                <div class="mt-2 border d-none d-md-block" style="height:400px"></div>
            </div>
        </div>
    </div>
</div>
@endsection
