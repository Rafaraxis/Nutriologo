@extends('layouts.default')
@section('titulo_pagina','Nutriologo | Pacientes')
@section('titulo','Nutriologo')
@section('subtitulo','Pacientes')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Agregar paciente</h3>
            </div>
            <div class="box-body">
                <form>
                    <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                    <label>Apellidos</label>
                    <input class="form-control" type="text" name="apellidos">
                    </div>
                    <div class="form-group">
                    <label>Nacimiento</label>
                    <input class="form-control" type="date" name="nacimiento">
                    </div>
                    <div class="form-group">
                    <label>Correo</label>
                    <input class="form-control" type="email" name="correo">
                    </div>
                    <div class="form-group">
                    <label>Contraseña</label>
                    <input class="form-control" type="password" name="password">
                    </div>
                    <div class="form-group">
                    <label>Confirmar contraseña</label>
                    <input class="form-control" type="password">
                    </div>
                    <div class="form-group">
                    <label>Fotografia</label>
                    <input class="form-control" type="file" name="foto">
                    </div>
                    <div class="form-group">
                    <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection