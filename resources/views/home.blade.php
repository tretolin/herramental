@extends('layouts.home')

@section('content')


<div class="modal-container">
    <!-- Modal -->
    <div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-0" style="border-radius: 0">
                <div class="modal-header text-center">
                    <div class="w-100">
                        <div class="font-weight-bold">Cargos del mes Máquina 1</div>
                        <div class="text-small pb-2">(12 de Diciembre a 11 de Enero)</div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="table table-hover size-12">
                        <div class="text-center py-2 mb-2">
                            <div>
                            <table class="table table-hover size-12">
                                <thead>
                                    <tr>
                                    <th scope="col">Máquina</th>
                                    <th scope="col">Tarifa x Uso</th>
                                    <th scope="col">Uso</th>
                                    <th scope="col">Detalle</th>
                                    <th scope="col">Semitotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>356712</td>
                                        <td>$50 x hr</td>
                                        <td>4 hrs</td>
                                        <td>
                                            <span>18/03/2020</span>
                                            <span>11:44 AM - 12:01 PM</span>
                                        </td>
                                        <td>$200.00</td>
                                    </tr>
                                    <tr>
                                        <td>356712</td>
                                        <td>$50 x hr</td>
                                        <td>2 hrs</td>
                                        <td>
                                            <span>19/03/2020</span>
                                            <span>8:44 AM - 16:01 PM</span>
                                        </td>
                                        <td>$150.00</td>
                                    </tr>
                                    <tr>

                                    <tr>
                                        <td>356712</td>
                                        <td>$50 x hr</td>
                                        <td>2 hrs</td>
                                        <td>
                                            <span>19/03/2020</span>
                                            <span>8:44 AM - 16:01 PM</span>
                                        </td>
                                        <td>$150.00</td>
                                    </tr>

                                    <tr>
                                        <td>356712</td>
                                        <td>$50 x hr</td>
                                        <td>2 hrs</td>
                                        <td>
                                            <span>19/03/2020</span>
                                            <span>8:44 AM - 16:01 PM</span>
                                        </td>
                                        <td>$150.00</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="bg-success text-white fixed-bottom m-0">
                        <table class="table table-hover size-12 mb-0">
                            <tr class="c-pointer text-white">
                                <td colspan="3" class="text-right text-uppercase">Total:</td>
                                <td colspan="1">32 hrs</td>
                                <td colspan="1">$1,400.00</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="col justify-content-center d-md-flex justify index-10">
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

                        <div class="tooltip-el block-content size-16 mt-0 float-tooltip d-none d-md-none" style="">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex justify-content-between mb-1">
                                    <div>
                                        <div class="circle d-inline-block border-blue mr-1"></div>
                                        <a class="link-dark rent-item" href="#" data-toggle="modal" data-target="#detail-modal">Maquina 1</a>
                                    </div>
                                    <div>$3,400.00</div>
                                </li>
                                <li class="d-flex justify-content-between mb-1">
                                    <div>
                                        <div class="circle d-inline-block border-orange mr-1"></div>
                                        <a class="link-dark rent-item" href="#" data-toggle="modal" data-target="#detail-modal">Maquina 2</a>
                                    </div>
                                    <div>$3,400.00</div>
                                </li>
                                <li class="d-flex justify-content-between mb-1">
                                    <div>
                                        <div class="circle d-inline-block border-yellow mr-1"></div>
                                        <a class="link-dark rent-item" href="#" data-toggle="modal" data-target="#detail-modal">Maquina 1</a>
                                    </div>
                                    <div>$3,400.00</div>
                                </li>
                            </ul>
                        </div>
                        <div class="tooltip-el tooltip-frame d-none d-md-none"></div>
                        <div class="block-content text-blue size-16 line-height-20">
                            3 máquinas en renta
                        </div>
                    </div>
                </div>
                <div class="col-md-8 p-0">
                    <div class="block-content text-blue size-18 mb-4">
                        <div class="font-weight-bold size-24">$1,650.00</div>
                        <div class="d-block">Pagar antes de: 12/12/20</div>
                        <div class="d-block">
                            <!-- <a class="font-italic link-blue" href="#">Ver recibo</a> -->
                        </div>
                    </div>
                    <div class="block-content size-18 mt-2 d-none d-md-block">
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between mb-1">
                                <div>
                                    <div class="circle d-inline-block border-blue mr-1"></div>
                                    <a class="link-dark rent-item" href="#">Maquina 1</a>
                                </div>
                                <div>$3,400.00</div>
                            </li>
                            <li class="d-flex justify-content-between mb-1">
                                <div>
                                    <div class="circle d-inline-block border-orange mr-1"></div>
                                    <a class="link-dark rent-item" href="#">Maquina 2</a>
                                </div>
                                <div>$3,400.00</div>
                            </li>
                            <li class="d-flex justify-content-between mb-1">
                                <div>
                                    <div class="circle d-inline-block border-yellow mr-1"></div>
                                    <a class="link-dark rent-item" href="#">Maquina 1</a>
                                </div>
                                <div>$3,400.00</div>
                            </li>
                        </ul>
                    </div>
                    <div class="block-content detail-charge w-100 mt-2 p-0" style="display:none">
                    <span class="c-pointer px-2 close-detail" style="float: right; font-size: 18px; font-size: 22px;" class="p-3">×</span>
                        <div class="text-center">
                            <div class="font-weight-bold pt-4">Cargos del mes Máquina 1</div>
                            <div class="text-small">(12 de Diciembre a 11 de Enero)</div>
                            <div>
                            <table class="table table-hover size-10">
                                <thead>
                                    <tr>
                                    <th scope="col">Máquina</th>
                                    <th scope="col">Tarifa x Uso</th>
                                    <th scope="col">Uso</th>
                                    <th scope="col">Detalle</th>
                                    <th scope="col">Semitotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>356712</td>
                                        <td>$50 x hr</td>
                                        <td>4 hrs</td>
                                        <td>
                                            <span>18/03/2020</span>
                                            <span>11:44 AM - 12:01 PM</span>
                                        </td>
                                        <td>$200.00</td>
                                    </tr>
                                    <tr>
                                        <td>356712</td>
                                        <td>$50 x hr</td>
                                        <td>2 hrs</td>
                                        <td>
                                            <span>19/03/2020</span>
                                            <span>8:44 AM - 16:01 PM</span>
                                        </td>
                                        <td>$150.00</td>
                                    </tr>
                                    <tr>

                                    <tr>
                                        <td>356712</td>
                                        <td>$50 x hr</td>
                                        <td>2 hrs</td>
                                        <td>
                                            <span>19/03/2020</span>
                                            <span>8:44 AM - 16:01 PM</span>
                                        </td>
                                        <td>$150.00</td>
                                    </tr>

                                    <tr>
                                        <td>356712</td>
                                        <td>$50 x hr</td>
                                        <td>2 hrs</td>
                                        <td>
                                            <span>19/03/2020</span>
                                            <span>8:44 AM - 16:01 PM</span>
                                        </td>
                                        <td>$150.00</td>
                                    </tr>
                                    <tr class="bg-success text-white c-pointer">
                                        <td colspan="3" class="text-right">Total:</td>
                                        <td colspan="1">32 hrs</td>
                                        <td colspan="1">$1,400.00</td>
                                    </tr>

                                </tbody>
                                </table>
                            </div>
                        </div>
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
