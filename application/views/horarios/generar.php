<a href="#" onMouseOver="muestra_caja()">Pasa por aqui</a>

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
			<div id="left-containerUno">
				<!-- this block will become sticky (with a little JavaScript help)-->
				<div id="left">
					<table id="table_materia">
						<colgroup>
							<col width="150"/>
							<col width="150"/>
						</colgroup>
						<tr>
						<td>
							<div class="redips-drag">
								Cálculo
								<br>
								<small class
							<div class="lll">lll</small>
							</div>
						</td>
						<td>
							<div class="redips-drag">
								Algoritmos II
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
						</tr>
					</table>
				</div>
			</div><!-- left container -->
			
			<!-- right container -->
			<div class="tabla">
				<table id="table1">
				<tr>
					<td class="redips-mark"></td>
					<td class="redips-mark">Lunes</td>
					<td class="redips-mark">Martes</td>
					<td class="redips-mark">Miercoles</td>
					<td class="redips-mark">Jueves</td>
					<td class="redips-mark">Viernes</td>
				</tr>
				<tr style="background-color: #eee">
					<td class="redips-mark">7:00 - 8:59</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="redips-mark">9:00 - 10:59</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr style="background-color: #eee">
					<td class="redips-mark">11:00 - 12:59</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="redips-mark">13:00 - 14:59</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr style="background-color: #eee">
					<td class="redips-mark">15:00 - 16:59</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<!-- <td><div id="d8" class="redips-drag t1"><img id="smile_img" src="/wp-includes/images/smilies/icon_smile.gif"/></div></td> -->
				</tr>
				<tr>
					<td class="redips-mark">17:00 - 18:59</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="redips-mark">17:00 - 18:59</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="redips-mark">19:00 - 21:00</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			</div>
		</div>

		<script language="javascript">
	function muestra_caja(){
		document.getElementById('caja').style.visibility = 'visible'
	}
</script>
</head>
<body>
<div id="caja" style="position: absolute; height: 20; width: 300;top: 10px;left: 100px; visibility:hidden">
<input type="text" name="caja_oculta">
</div>