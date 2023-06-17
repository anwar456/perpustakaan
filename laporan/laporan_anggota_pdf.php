<?php

    $content = "
    <page>
        <h1>Example</h1>
        <br>
        Ceci est un <b>Example Utilities</b>
        de <a href='http://html2pdf.fr/'>HTML2PDF</a>. <br>
    </page>";

    require_once('../assets/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('example.pdf');
?>