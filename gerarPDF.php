<?php
include ("conexao.php");

require_once __DIR__ . './vendor/autoload.php';
$grupo = SelectAllPessoa();
$mpdf = new \Mpdf\Mpdf();
$mpdf->SetDisplayMode('fullpage');

 $html= "<h1>Relatorio de Dados Agenda</h1></hr>
     <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Nascimento</th>
                    <th>Telefone</th>
                    <th>Endereço</th>                    
                </tr>
            </thead>
            <tbody>";
                 
                     foreach ($grupo as $pessoa) {
               
                
                  $html= $html ."<tr>
                    <td>{$pessoa["id"]}</td>
                    <td>{$pessoa["nome"]}</td>
                    <td>".formatoData($pessoa["nascimento"])."</td>
                    <td>{$pessoa["telefone"]}</td>
                    <td>{$pessoa["endereço"]}</td>
                    </tr>";
                
                 
                 }                 
            
        // put your code here
      
          
            $html= $html ."</tbody>
        </table>";
$mpdf->WriteHTML($html);            
$mpdf->Output();
exit();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

