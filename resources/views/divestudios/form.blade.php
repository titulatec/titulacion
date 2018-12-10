
				<div class="col-md-6">
		        	<div class="form-group">
		        	 	<label for="name">Nombre</label>
			        	<input type="text" class="form-control" name="name" id="name" cols="5" disabled>
		        	</div>	        	 
	      
		        	<div class="form-group">
		        		<label for="carrera">Carrera</label>
		        		<input name="carrera" id="carrera" cols="5" id='carrera' class="form-control" disabled="">
		        	</div>        	 
	       
		        	<div class="form-group">
			        	<label for="noc">No Control</label>
			        	<input type="text" class="form-control" name="noc" id="noc" cols="5" disabled>
		        	</div>
		        	<div class="form-group">
			        	<label for="mail">E-mail@</label>
			        	<input type="text" class="form-control" name="mail" id="mail" cols="5">
		        	</div>
		        </div>
		        <div class="col-md-6">
		        	<div class="form-group">
						<label for="telefono">Telefono</label>
			            <input type="text" class="form-control" name="telefono" id="telefono" cols="5">
			        </div>

			        <div class="form-group">
						<label for="plan_estud">Plan de Estudios</label>
			            <!--<input type="text" class="form-control" name="plan_estud" id="plan_estud" cols="5">-->
			            {{ Form::select('plan_estud', ['2004' =>'2004', '2010' =>'2010' ], null, ['class' => 'form-control']) }}
			        </div>

			        <div class="form-group">
						<label for="opcion_titulacion">Opcion de titulacion</label>
			           <!--<input type="text" class="form-control" name="opcion_titulacion" id="opcion_titulacion" cols="5">-->
			            {{ Form::select('opcion_titulacion', ['Residencia Profesional' =>'Residencia Profesional', 'Proyecto de Investigacion' =>'Proyecto de Investigacion', 'Proyecto integrador' =>'Proyecto integrador', 'Proyecto Productivo' =>'Proyecto Productivo', 'Proyecto de innovacion tecnologica' =>'Proyecto de innovacion tecnologica', 'Proyecto de Emprendedurismo' =>'Proyecto de Emprendedurismo', 'Proyecto Integral de Educacion Dual' =>'Proyecto Integral de Educacion Dual', 'Estancia' =>'Estancia', 'Tesis o Tesina' =>'Tesis o Tesina', 'Desempeño Satisfactorio' =>'Desempeño Satisfactorio' ], null, ['class' => 'form-control']) }}
			        </div>

			        <div class="form-group">
						<label for="tipo">Tipo</label>
			            <!--<input type="text" class="form-control" name="tipo" id="tipo" cols="5">-->
			            {{ Form::select('tipo', ['Interno' =>'Interno', 'Foraneo' =>'Foraneo' ], null, ['class' => 'form-control']) }}
			        </div>
			    </div>