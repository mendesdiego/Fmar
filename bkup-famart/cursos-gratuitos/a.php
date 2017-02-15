
            <select id="selectCursos" name = "curso_escolhido" onchange="atribuiValorAoBotao(this.value)">


<option  >
                    -------------- 
                </option>   

                <option  >
                    Segmento - Educação
                </option>
                <option  >
                    -------------- 
                </option>   

                <option  value="Educação á Distância">
                    Educação á Distância  
                </option>

                <option  value=" Os Desafios da Alfabetização e Letramento"> 
                    Os Desafios da Alfabetização e Letramento
                </option>

                <option  value=" Educar Adolescentes"> 
                    Educar Adolescentes

                </option>


                <option  value=" Educação Ambiental na Escola"> 
                    Educação Ambiental na Escola

                </option>


                <option  value=" Alfabetização Lúdica"> 
                    Alfabetização Lúdica

                </option>


                <option  value=" Distúrbios na Aprendizagem"> 
                    Distúrbios na Aprendizagem

                </option>


                <option  value=" Sexualidade na escola"> 
                    Sexualidade na escola
                </option>



                <option  >
                    -------------- 
                </option>   

                <option  >
                    Segmento - Variados
                </option>
                <option  >
                    -------------- 
                </option>   

                <?php
                require("conexao.php");

                $sql = "SELECT * FROM cursos_moodle";

                $query = mysql_query($sql, $con);
                echo('<option value="" disabled selected>Selecione seu Curso</option>');


  
                while ($linha = mysql_fetch_array($query)) {
                    echo("<option  value=" . $linha['IdCurso'] . ">" . $linha['NomeCurso'] . "</option>");

                }
            

                ?>

                




              

            </select>
