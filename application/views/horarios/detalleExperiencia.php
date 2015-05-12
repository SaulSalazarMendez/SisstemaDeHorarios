<div class="combo">
			<label for="nombre_carrera">Selecciona una carrera</label>
			<!-- El tipo de usuario es de solo lectura-->
			<select id="cmbMake" name="Make"     class="form-control">
				 <option value="Informatica">Informática</option>
				 <option value="Estadistica">Ciencias y Técnicas Estadísticas</option>
				 <option value="IS">Ingenieria de Software</option>
				 <option value="redes">Redes y Servicios de Cómputo</option>
				 <option value="tecnologias">Tecnologias</option>
			</select>
			<input type="hidden" name="tipoUsuario" value="U" id="tipoUsuario" maxlength="80" size="30"  />
		</div>
		<!-- tables inside this DIV could have draggable content -->
		<div id="redips-drag">
			<!-- left container -->
			<div id="left-container">
				<!-- this block will become sticky (with a little JavaScript help)-->
				<div id="left">
					<table id="table1">
						<colgroup>
							<col width="150"/>
							<col width="150"/>
							<col width="150"/>
						</colgroup>
						<tr>
						<td>
							<div class="redips-drag">
								Cálculo
							</div>
						</td>
						<td>
							<div class="redips-drag">
								Algoritmos II
							</div>
						</td>
						<td>
							<div class="redips-drag">
								Algebra
							</div>
						</td>
						</tr>
						<tr>
						<td>
							<div class="redips-drag">
								Cálculo
							</div>
						</td>
						<td>
							<div class="redips-drag">
								Algoritmos II
							</div>
						</td>
						<td>
							<div class="redips-drag">
								Algebra
							</div>
						</td>
						</tr>
					</table>
					<div class="instructions">
						Arrastra una EE al cuadro para ver detalles
					</div>
				</div>
			</div><!-- left container -->
			
			<!-- right container -->
			<div id="right" class="detalle">
				<table cellspacing="0" cellpadding="0">
					<colgroup><col width="400"/></colgroup>
					<tr class="maintd"><td></td></tr>
				</table>
			</div>
		</div>