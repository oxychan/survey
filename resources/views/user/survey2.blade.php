@extends('user.partials.main_layout')

@section('container')
    <div id="app">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default Radio</h4>
                                </div>
                                <div class="card-body">
                                    <form action="action_page.php">
                                            <div class="form-group">
                                                <label for="kesesuaian_layanan">Bagaimana Pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya ?</label></P>
                                                <input type='radio' name=''
                                                    value='tidak_sesuai' />tidak sesuai&nbsp
                                                <input type='radio' name=''
                                                    value='kurang_sesuai' />kurang sesuai&nbsp
                                                <input type='radio' name='' value='sesuai' />sesuai&nbsp
                                            </div>


                                            <div class="form-group">
                                                <label for="kesesuaian_layanan">harapan ?</label></P>
                                                terendah
                                                <input type='radio' name=''
                                                    value='1' />1&nbsp
                                                <input type='radio' name=''
                                                    value='2' />2&nbsp
                                                <input type='radio' name=''
                                                    value='3' />3&nbsp
                                                <input type='radio' name=''
                                                    value='4' />4&nbsp
                                                tertinggi
                                            
                                            </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
