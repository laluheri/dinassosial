@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Input Data</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('sumberdata') ? ' has-error' : '' }}">
                            <label for="sumberdata" class="col-md-4 control-label">Sumber Data</label>

                            <div class="col-md-6">
                                <input id="sumberdata" type="text" class="form-control" name="sumberdata" value="{{ old('sumberdata') }}" required autofocus>

                                @if ($errors->has('sumberdata'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sumberdata') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Tanggal</label>

                            <div class="col-md-6">
                                <input id="tanggal" type="email" class="form-control" name="tanggal" value="{{ old('tanggal') }}" required>

                                @if ($errors->has('tanggal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('umur') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Umur/Tahun</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="umur" required>

                                @if ($errors->has('umur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('umur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control" rows="3" name="alamat" required></textarea> 

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Kelamin') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <select name="Kelamin" class="form-control">
                                    <option value="L">Laki Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pendidikan') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Pendidikan</label>

                            <div class="col-md-6">
                                <select name="pendidikan" class="form-control">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA/SEDERAJAT</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                    <option value="lain">Lainnya</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jeniskasus') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Jenis Kasus</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="jeniskasus" required>

                                @if ($errors->has('jeniskasus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jeniskasus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kronologi') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Kronologi</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control" rows="3" name="kronologi" required></textarea> 

                                @if ($errors->has('kronologi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kronologi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Keterangan</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control" rows="3" name="keterangan" required></textarea> 

                                @if ($errors->has('keterangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keterangan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                <button type="submit" class="btn btn-danger">
                                    Kosongkan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
