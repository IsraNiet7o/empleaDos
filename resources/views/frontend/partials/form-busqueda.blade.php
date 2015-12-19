<div class="input-field col s12 l6 grey-text text-darken-2">
      {!! Form::text('palabraClave', null, ['class' => 'validate'])     !!}
      {!!   Form::label('palabraClave','Palabra Clave')     !!}
</div>
<div class="input-field col s12 l6  grey-text text-darken-2 ">
      {!!Form::select('Estado',array('1'=>'Chihuahua','2'=>'Guadalajara','3'=>'Monterrey'), null, ['placeholder' => 'Elige un Estado','required'=>'required'])!!}
      {!!   Form::label('Estado','Estado')!!}
</div>
<div class="input-field col s6 grey-text text-darken-2">
      {!!Form::select('categoria',array('1'=>'Ingeniería','2'=>'Contabilidad','3'=>'Diseño'), null, ['placeholder' => 'Elige una Categoría','required'=>'required'])!!}
      {!!   Form::label('categoria','Categoría')!!}
</div>
<div class="input-field col s6 grey-text text-darken-2">
      {!!Form::select('subcategoria',array('1'=>'Sub1','2'=>'Sub2','3'=>'Sub3'), null, ['placeholder' => 'Elige una Subcategoía','required'=>'required'])!!}
      {!!   Form::label('subcategoria','Subcategoía')!!}
</div>
<div class="input-field col s6 m3 grey-text text-darken-2">
      {!!Form::select('dia',array('1'=>'Ayer','2'=>'Hace 2 Días','3'=>'Hace 3 Días'), null, ['placeholder' => 'No importa','required'=>'required'])!!}
      {!!   Form::label('dia','Desde')!!}
</div>
<div class="input-field col s6 m3 grey-text text-darken-2">
      {!!Form::select('salario',array('1'=>'$0 MXN - $5,000 MXN','2'=>'$5,000 MXN - $10,000 MXN','3'=>'$10,000 MXN - $15,000 MXN'), null, ['placeholder' => 'No importa','required'=>'required'])!!}
      {!!   Form::label('salario','Salario')!!}
</div>