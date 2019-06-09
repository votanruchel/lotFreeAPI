<?php 
//var_dump($lastcontest);
$dezenas = explode(',',$lastcontest['dezenas']);
//var_dump($dezenas);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <div class="show-contest">
                <div><span class='title-resultado'>Resultado</span> Concurso <?php echo $lastcontest['numero']." (".$lastcontest['data'].")";?> </div>
                <div class="inputs-search">
                 Buscar concurso: <input type="text" id="buscarConcurso" placeholder="Numero concurso"> 
                </div>
                  
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <small class="text-muted" style="font-family: Arial;">Sorteio realizado no <?php echo $lastcontest['local']." em ".$lastcontest['cidade'];?></small>
            <table class="last-constest">
                <tbody class="table-body">
                    <tr class='table-row'>
                        <td class='table-data'><?php echo $dezenas[0];?></td>
                        <td class='table-data'><?php echo $dezenas[1];?></td>
                        <td class='table-data'><?php echo $dezenas[2];?></td>
                        <td class='table-data'><?php echo $dezenas[3];?></td>
                        <td class='table-data'><?php echo $dezenas[4];?></td>
                    </tr>
                    <tr class='table-row'>
                        <td class='table-data'><?php echo $dezenas[5];?></td>
                        <td class='table-data'><?php echo $dezenas[6];?></td>
                        <td class='table-data'><?php echo $dezenas[7];?></td>
                        <td class='table-data'><?php echo $dezenas[8];?></td>
                        <td class='table-data'><?php echo $dezenas[9];?></td>
                    </tr>
                    <tr class='table-row'>
                        <td class='table-data'><?php echo $dezenas[10];?></td>
                        <td class='table-data'><?php echo $dezenas[11];?></td>
                        <td class='table-data'><?php echo $dezenas[12];?></td>
                        <td class='table-data'><?php echo $dezenas[13];?></td>
                        <td class='table-data'><?php echo $dezenas[14];?></td>
                    </tr>
                </tbody>
            </table>
            <div class="row" style="padding-top: 25px;">
                <div class="col-sm-3">
                Estimativa de prêmio do próximo concurso <?php echo $lastcontest['pc_data'];?>
                </div>
                <div class="col-sm-6 vertical-center sllsl">
                <?php echo $lastcontest['pc_valor_estimado'];?>
                </div>
                
            </div>
            <div class="row" style="padding-top: 25px;">
                    <div class="col-sm-3">
                    Acumulado para Sorteio Especial da Independência
                    </div>
                    <div class="col-sm-5 vertical-center sllsl2">
                    R$ <?php echo $lastcontest['especial_acumulado'];?> 
                    </div>           
                </div>
        </div>
        <div class="col-sm-6">
            <div class="box-p">
                <span class='title-resultado' style="font-size: 30px;">Premiação</span>
                <div>
                <strong>15 acertos</strong><br>
                <?php echo $lastcontest['ganhadores_ac15'];?> apostas ganhadoras, R$ <?php echo $lastcontest['acertos_15'];?>
                </div>
                <div>
                <strong>14 acertos</strong><br>
                <?php echo $lastcontest['ganhadores_ac14'];?> apostas ganhadoras, R$ <?php echo $lastcontest['acertos_14'];?>
                </div>
                <div>
                <strong>13 acertos</strong><br>
                <?php echo $lastcontest['ganhadores_ac13'];?> apostas ganhadoras, R$ <?php echo $lastcontest['acertos_13'];?>
                </div>
                <div>
                <strong>12 acertos</strong><br>
                <?php echo $lastcontest['ganhadores_ac12'];?> apostas ganhadoras, R$ <?php echo $lastcontest['acertos_12'];?>
                </div>
                <div>
                <strong>11 acertos</strong><br>
                <?php echo $lastcontest['ganhadores_ac11'];?> apostas ganhadoras, R$ <?php echo $lastcontest['acertos_11'];?> 
                </div>  
        
                <span class='title-resultado' style="font-size: 30px;">Arrecadação total</span>
                <div>R$ <?php echo $lastcontest['arrecadacao_total'];?></div>
            </div>
        </div>
    </div>
    
</div>