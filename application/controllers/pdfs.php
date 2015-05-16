<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Pdfs extends CI_Controller {

 
    function __construct() {
        parent::__construct();
        $this->load->model('pdfs_model');
    }
    
    public function index()
    {
        //$data['provincias'] llena el select con las provincias españolas
        //$data['provincias'] = $this->pdfs_model->getProvincias();
        //cargamos la vista y pasamos el array $data['provincias'] para su uso
        $this->load->view('pdfs_view', $data);
    }
//----------Informe por profesor----------
    public function generar() {
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Equipo2');
        $pdf->SetTitle('Ejemplo de provincías con TCPDF');
        $pdf->SetSubject('Tutorial TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
 
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
       // $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        //$pdf->setFooterData($tc = array(0, 64, 0), $lc = array(0, 64, 128));
 
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
//relación utilizada para ajustar la conversión de los píxeles
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
 
// ---------------------------------------------------------
// establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);
 
// Establecer el tipo de letra
 
//Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
// Helvetica para reducir el tamaño del archivo.
        $pdf->SetFont('helvetica', '', 12, '', true);
 
// Añadir una página
// Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();
 
//fijar efecto de sombra en el texto
        //$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
 
// Establecemos el contenido para imprimir
        $id = $this->uri->segment(3);//$_POST['nombrem'];
		$connStr = 'sqlite:db/horarios.db';
		try{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT id, ee_nrc FROM curso WHERE maestro_id=$id");
			$rows = $query->fetchAll();
			$querym = $conn->query("SELECT nombre, apellidos FROM maestro WHERE id=$id");
			$rowsm = $querym->fetchAll();
			
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
				   
			   
        //$provincia = $this->input->post('provincia');
        //$provincias = $this->pdfs_model->getProvinciasSeleccionadas($provincia);
        //foreach($provincias as $fila)
        //{
           // $prov = $fila['p.provincia'];
        //}
		foreach($rowsm as $row){
			$nombre = $row['nombre'];
			$apellidos = $row['apellidos'];
		}
		
        //preparamos y maquetamos el contenido a crear
        $html = '';
        $html .= "<style type=text/css>";
        $html .= "th{color: #fff; font-weight: bold; background-color: #222}";
        $html .= "td{background-color: #AAC7E3; color: #000000; border: 1px solid transparent}";
        $html .= "</style>";
        $html .= "<h2>Maestro: ".$nombre." ".$apellidos."</h2><h4>Horario:</h4>";
        $html .= "<table width='100%'>";
        $html .= "<tr><th>NRC</th><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th></tr>";
        //Comparar cursos
		foreach($rows as $row){
			$id_curso = $row['id'];
            $ee_nrc = $row['ee_nrc'];
			
			
			$queryc = $conn->query("SELECT salon_id, dia, hora FROM salon_curso WHERE curso_id=$id_curso");
			$rowc = $queryc->fetchAll();
			$queryee = $conn->query("SELECT nombre FROM ee WHERE nrc=$ee_nrc");
			$rowee = $queryee->fetchAll();
			foreach($rowee as $row){
				$nombreee = $row['nombre'];
			$hlunes = 'Hora: ';
			$slunes = '';
			$hmartes = 'Hora: ';
			$smartes = '';
			$hmier = 'Hora: ';
			$smier = '';
			$hjueves = 'Hora: ';
			$sjueves = '';
			$hviernes = 'Hora: ';
			$sviernes = '';
			
			foreach ($rowc as $row){
				$dia = $row['dia'];
				$salon_id = $row['salon_id'];
				$hora = $row['hora'];
				
				if($dia=='Lunes'){
					$hlunes .= $hora." ";
                    $slunes = "Salon: ".$salon_id;					
				}else{
					if($dia=='Martes'){
						$hmartes .= $hora." ";
                        $smartes = "Salon: ".$salon_id;
					}else{
						if($dia=='Miercoles'){
							$hmier .= $hora." ";
                            $smier = "Salon: ".$salon_id;
						}else{
							if($dia=='Jueves'){
								$hjueves .= $hora." ";
                                $sjueves = "Salon: ".$salon_id;
							}else{
								$hviernes .= $hora." ";
                                $sviernes = "Salon: ".$salon_id;
							}
						}
					}
				}
				
			}$html .= "<tr><td class='id'>" . $ee_nrc . "<br>" . $nombreee . "</td><td class='localidad'>" . $slunes . "<br>" . $hlunes . "</td><td>" . $smartes . "<br>" . $hmartes . "</td><td>" . $smier . "<br>" . $hmier . "</td><td>" . $sjueves . "<br>" . $hjueves . "</td><td>" . $sviernes . "<br>" . $hviernes . "</td></tr>";
		}
		}
        //provincias es la respuesta de la función getProvinciasSeleccionadas($provincia) del modelo
        //foreach ($rows as $row){
          //  $id_curso = $row['id'];
            //$ee_nrc = $row['ee_nrc'];	
			
			//$html .= "<tr><td class='id'>" . $apellidos . "<br>" . $apellidos . "</td><td class='localidad'>" . $matricula . "</td></tr>";
		//}
		$html .= "</table>";
		
		
		
		/*foreach ($provincias as $fila) 
        {
            $id = $fila['l.id'];
            $localidad = $fila['l.localidad'];
 
            $html .= "<tr><td class='id'>" . $id . "</td><td class='localidad'>" . $localidad . "</td></tr>";
        }*/
        //$html .= "</table>";
 
// Imprimimos el texto con writeHTMLCell()
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
 
// ---------------------------------------------------------
// Cerrar el documento PDF y preparamos la salida
// Este método tiene varias opciones, consulte la documentación para más información.
        $nombre_archivo = utf8_decode("Horario de ".$id.".pdf");
        $pdf->Output($nombre_archivo, 'I');
    }
	
//----------Informe General----------
    public function generarInf() {
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Equipo2');
        $pdf->SetTitle('Ejemplo de provincías con TCPDF');
        $pdf->SetSubject('Tutorial TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
 
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        //$pdf->setFooterData($tc = array(0, 64, 0), $lc = array(0, 64, 128));
 
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
//relación utilizada para ajustar la conversión de los píxeles
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
 
// ---------------------------------------------------------
// establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);
 
// Establecer el tipo de letra
 
//Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
// Helvetica para reducir el tamaño del archivo.
        $pdf->SetFont('helvetica', '', 12, '', true);
 
// Añadir una página
// Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();
 
//fijar efecto de sombra en el texto
        //$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
 
// Establecemos el contenido para imprimir
        //$id = $this->uri->segment(3);//$_POST['nombrem'];
		$connStr = 'sqlite:db/horarios.db';
		try{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT nombre, apellidos, matricula FROM maestro");
			$rows = $query->fetchAll();
			
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
				   
			   
        //$provincia = $this->input->post('provincia');
        //$provincias = $this->pdfs_model->getProvinciasSeleccionadas($provincia);
        //foreach($provincias as $fila)
        //{
           // $prov = $fila['p.provincia'];
        //}
		
        //preparamos y maquetamos el contenido a crear
        $html = '';
        $html .= "<style type=text/css>";
        $html .= "th{color: #fff; font-weight: bold; background-color: #222}";
        $html .= "td{background-color: #AAC7E3; color: #000000; border: 1px solid transparent}";
        $html .= "</style>";
        $html .= "<h2>Reporte Maestros</h2><h4></h4>";
        $html .= "<table width='100%'>";
        $html .= "<tr><th>Matrícula</th><th>Nombre</th><th>Apellidos</th></tr>";
        //Comparar cursos
		foreach($rows as $row){
			$nombre = $row['nombre'];
			$apellidos = $row['apellidos'];
			$matricula = $row['matricula'];			
				
			$html .= "<tr><td class='id'>" . $matricula . "</td><td class='localidad'>" . $nombre . "</td><td>" . $apellidos . "</td></tr>";
		
		}
        //provincias es la respuesta de la función getProvinciasSeleccionadas($provincia) del modelo
        //foreach ($rows as $row){
          //  $id_curso = $row['id'];
            //$ee_nrc = $row['ee_nrc'];	
			
			//$html .= "<tr><td class='id'>" . $apellidos . "<br>" . $apellidos . "</td><td class='localidad'>" . $matricula . "</td></tr>";
		//}
		$html .= "</table>";
		
		
		
		/*foreach ($provincias as $fila) 
        {
            $id = $fila['l.id'];
            $localidad = $fila['l.localidad'];
 
            $html .= "<tr><td class='id'>" . $id . "</td><td class='localidad'>" . $localidad . "</td></tr>";
        }*/
        //$html .= "</table>";
 
// Imprimimos el texto con writeHTMLCell()
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
 
// ---------------------------------------------------------
// Cerrar el documento PDF y preparamos la salida
// Este método tiene varias opciones, consulte la documentación para más información.
        $nombre_archivo = utf8_decode("Maestros.pdf");
        $pdf->Output($nombre_archivo, 'I');
    }
}