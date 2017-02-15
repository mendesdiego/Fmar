<?php 
$nome               = isset($_GET['nome'])?$_GET['nome']:NULL;
$como_conheceu      = isset($_GET['como_conheceu'])?$_GET['como_conheceu']:NULL;
$dia               = isset($_GET['dia'])?$_GET['dia']:NULL;
$horario      = isset($_GET['horario'])?$_GET['horario']:NULL;
$sexo               = isset($_GET['sexo'])?$_GET['sexo']:NULL;
$curso              = isset($_GET['curso'])?$_GET['curso']:NULL;
$unidade            = isset($_GET['unidade'])?$_GET['unidade']:NULL;
$rg                 = isset($_GET['rg'])?$_GET['rg']:NULL;
$orgao              = isset($_GET['orgao'])?$_GET['orgao']:NULL;
$cpf                = isset($_GET['cpf'])?$_GET['cpf']:NULL;
$nascimento         = isset($_GET['nascimento'])?$_GET['nascimento']:NULL;
$nacionalidade      = isset($_GET['nacionalidade'])?$_GET['nacionalidade']:NULL;
$naturalidade       = isset($_GET['naturalidade'])?$_GET['naturalidade']:NULL;
$email              = isset($_GET['email'])?$_GET['email']:NULL;
$estadocivil        = isset($_GET['estadocivil'])?$_GET['estadocivil']:NULL;
$cep                = isset($_GET['cep'])?$_GET['cep']:NULL;
$endereco           = isset($_GET['endereco'])?$_GET['endereco']:NULL;
$numero             = isset($_GET['numero'])?$_GET['numero']:NULL;
$bairro             = isset($_GET['bairro'])?$_GET['bairro']:NULL;
$local             	= isset($_GET['local'])?$_GET['local']:NULL;
$estado             = isset($_GET['estado'])?$_GET['estado']:NULL;
$complemento        = isset($_GET['complemento'])?$_GET['complemento']:NULL;
$telfixo            = isset($_GET['telfixo'])?$_GET['telfixo']:NULL;
$telcel             = isset($_GET['telcel'])?$_GET['telcel']:NULL;
$necessidades       = isset($_GET['necessidades'])?$_GET['necessidades']:NULL;
$descricao       	= isset($_GET['descricao'])?$_GET['descricao']:NULL;
$enem          		= isset($_GET['enem'])?$_GET['enem']:NULL;
$num_enem          	= isset($_GET['num_enem'])?$_GET['num_enem']:NULL;
$ano_de_realizacao  = isset($_GET['ano_de_realizacao'])?$_GET['ano_de_realizacao']:NULL;
$datamatricula      = isset($_GET['datamatricula'])?$_GET['datamatricula']:NULL;






require_once("fpdf/fpdf.php");

$pdf= new FPDF("P","cm","A4");


$pdf->AddPage();

//LOGO
$pdf->Image('images/logo-famart.png',1.3,1.2,2.8,.7,'PNG');
$pdf->SetFont('arial','B',14);
$pdf->Ln(0.1);

//CONFIRMAÇÃO DOS DADOS DE INSCRIÇÃO
$pdf->SetFont('arial','B',14);
$pdf->Cell(0,0.9,"CONFIRMAÇÃO DOS DADOS DE INSCRIÇÃO:",0,1,'C');
$pdf->Ln(0.5);


//Texto
$pdf->SetFont('arial','B',8);
$pdf->Cell(8.7,0.4,"Este documento NÃO é válido como comprovante de inscrição:",0,1,'C');
$pdf->Ln(0.5);

//Unidade
$pdf->SetFont('arial','B',8);
$pdf->Cell(2.7,0.4,"Unidade:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(9,0.4,$unidade,0,1,'L');


//nome
$pdf->SetFont('arial','B',8);
$pdf->Cell(2.7,0.4,"Nome:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(9,0.4,$nome,0,0,'L');



//sexo
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Sexo:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(5,0.4,$sexo,0,1,'L');


//Nascimento
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Nascimento:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(9,0.4,$nascimento,0,1,'L');


//CPF
$pdf->SetFont('arial','B',8);
$pdf->Cell(2.7,0.4,"CPF:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(9,0.4,$cpf,0,0,'L');

//RG
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"RG / Órgão:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(5.5,0.4,$rg.' '.$orgao,0,1,'L');


//Endereço
$pdf->SetFont('arial','B',8);
$pdf->Cell(2.7,0.4,"Endereço:",0,0,'L');



$pdf->setFont('arial','',8);
$pdf->Cell(9,0.4,$endereco,0,0,'L');
$pdf->setFont('arial','B',8);
$pdf->Cell(2,0.4,"Nº   ",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(9,0.4,$numero,0,0,'L');



//cep
$pdf->SetFont('arial','B',8);
$pdf->Cell(1.5,0.4,"CEP:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(5,0.4,$cep,0,1,'L');



//cidade
$pdf->SetFont('arial','B',8);
$pdf->Cell(2.7,0.4,"Cidade:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(9,0.4,$local,0,0,'L');

//Estado
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Estado:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(5,0.4,$estado,0,1,'L');


//BAIRRO
$pdf->SetFont('arial','B',8);
$pdf->Cell(2.7,0.4,"Bairro:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(9,0.4,$bairro,0,0,'L');

//Complemento
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Complemento:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(0,0.4,$complemento,0,1,'L');

//Telefone
$pdf->SetFont('arial','B',8);
$pdf->Cell(2.7,0.4,"Telefone:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(9,0.4,$telfixo,0,0,'L');


//Telefone Celular
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Celular:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(8.7,0.4,$telcel,0,1,'L');

//email
$pdf->SetFont('arial','B',8);
$pdf->Cell(2.7,0.4,"E-mail:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(0,0.4,$email,0,1,'L');

//Como Conheceu
$pdf->SetFont('arial','B',8);
$pdf->Cell(4,0.4,"Como Conheceu:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(0,0.4,$como_conheceu,0,1,'L');

//Conclusão da  Graduação
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Data:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(0,0.4,$datamatricula,0,1,'L');

// Quebra a linha em 5 de acordo com a medida da sua página, MM, CM etc...
$pdf->Cell(0,0.9,"","B",1,'C');
$pdf->Ln(0.4);


// Texto
$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"DADOS DA PROVA","",1,'L');
$pdf->Ln(0.4);


//Conclusão da  Graduação
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Local:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(0,0.4,"FAMART | Faculdade Martins | Campus Itaúna",0,1,'L');

//Conclusão da  Graduação
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Endereço:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(0,0.4,"Rua Osório Santos, 207 Nogueira Machado, Itaúna/MG   35680-229",0,1,'L');

//Conclusão da  Graduação
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Data:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(0,0.4,$dia,0,1,'L');

//Conclusão da  Graduação
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Horário:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(0,0.4,$horario,0,1,'L');

//Conclusão da  Graduação
$pdf->SetFont('arial','B',8);
$pdf->Cell(2,0.4,"Referência:",0,0,'L');
$pdf->setFont('arial','',8);
$pdf->Cell(0,0.4,"Atrás do SENAI",0,1,'L');


// Quebra a linha em 5 de acordo com a medida da sua página, MM, CM etc...
$pdf->Cell(0,0.9,"","B",1,'C');
$pdf->Ln(0.4);





/*$pdf->SetFont('arial','B',11);
$pdf->Cell(0,0.4,"FORMA DE PAGAMENTO:","",1,'L');


$pdf->SetFont('arial','I',10);
$pdf->Cell(0,0.9,"$pagamento","",1,'L');


$pdf->SetFont('arial','BI',11);
$pdf->Cell(0,0.9,"Regulamento:","",1,'L');
$pdf->Ln(0.4);



$pdf->SetFont('arial','BU',10);
$pdf->MultiCell(0,0, "Leia atentamente e assine as duas páginas. Tire suas dúvidas no ato da assinatura." ,0, "L" ,"");
$pdf->Ln(0.6);



$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"I - DAS INFORMAÇÕES CADASTRAIS","",1,'L');
$pdf->Ln(0.4);


$pdf->SetFont('arial','',8);
$pdf->MultiCell(0,0.4, "Fica o (a) aluno (a) obrigado a informar corretamente seu endereço completo no ato da pré-inscrição, bem como todas as eventuais alterações que vierem ocorrer durante a realização do curso ora contratado. A prestação de informações  indevidas e/ou incompletas serão entendidas como ato de má fé, cabendo a aplicação de penalidade própria, bem como a adoção das medidas  judiciais e administrativas cabíveis." ,0, "L" ,"");



$pdf->Ln(0.4);
$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"II - DOCUMENTAÇÃO NECESSÁRIA PARA EFETIVAÇÃO DA MATRÍCULA:","",1,'L');
$pdf->Ln(0.4);


$pdf->SetFont('arial','',8);
$pdf->MultiCell(0,0.4, "Fica o (a) aluno (a) obrigado a informar corretamente seu endereço completo no ato da pré-inscrição, bem como todas as eventuais alterações que vierem ocorrer durante a realização do curso ora contratado. A prestação de informações  indevidas e/ou incompletas serão entendidas como ato de má fé, cabendo a aplicação de penalidade própria, bem como a adoção das medidas  judiciais e administrativas cabíveis." ,0, "L" ,"");


$pdf->Ln(0.4);

$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"[  ] Ficha de inscrição/regulamento devidamente impressa e assinada; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"[  ] Diploma ou declaração de conclusão do curso superior, traduzido e válido no Brasil. (CÓPIA AUTENTICADA); ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"[  ] Histórico Escolar da Graduação; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"[  ] Histórico Escolar do Ensino Médio ou equivalente. (APENAS PARA 2ª GRADUAÇÃO); ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"[  ] Cópia de comprovante de endereço, CPF, RG, Título Eleitoral e comprovante da última votação; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"[  ] 01 Foto 3x4; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"[  ] Certidão de nascimento ou casamento; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"[  ] Comprovante de quitação das obrigações militares (sexo masculino). ","",1,'L');
$pdf->Ln(0.2);

$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"Observação: Eventuais custos de postagem da documentação são de responsabilidade exclusiva do aluno.","",1,'L');




$pdf->Ln(0.4);
$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"III - DAS PROMOÇÕES E EVENTUAIS DESCONTOS:","",1,'L');
$pdf->Ln(0.4);
$pdf->SetFont('arial','',8);
$pdf->MultiCell(0,0.4, "Faculta a instituição conceder ao aluno descontos e/ou promoções em sua pré-inscrição e/ou parcelas, não sendo tal benefício tido como regra ou novação. Havendo a adesão a determinada promoção e/ou desconto, não poderá o (a) aluno (a) solicitar a migração e/ou alteração para outra que venha ser divulgada posteriormente. Será vedado ainda o acúmulo de descontos e/ou promoções, fazendo o (a) aluno (a) jus àquela que melhor lhe convier." ,0, "L" ,"");


$pdf->Ln(0.4);
$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"IV - MODALIDADE DE ENSINO:","",1,'L');
$pdf->Ln(0.4);
$pdf->SetFont('arial','',8);
$pdf->MultiCell(0,0.4, "Os estudos são desenvolvidos na modalidade semipresencial, com o método desenvolvido à distância e não depende de formação de turmas." ,0, "L" ,"");


$pdf->Ln(0.4);
$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"V - TRANSFERÊNCIA DE CURSO:","",1,'L');
$pdf->Ln(0.4);
$pdf->SetFont('arial','',8);
$pdf->MultiCell(0,0.4, " Aluno que desejar transferir de curso deverá encaminhar protocolo de serviço, requerimento específico e efetuar o pagamento da taxa escolar correspondente, a fim de cobrir despesas e custos operacionais de tal operação. " ,0, "L" ,"");


$pdf->Ln(0.4);
$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"VI - EMISSÃO DE DOCUMENTOS:","",1,'L');
$pdf->Ln(0.4);
$pdf->SetFont('arial','',8);
$pdf->MultiCell(0,0.4, " Eventuais solicitações de emissão de documentos escolares estarão sujeitas a cobrança de taxas, nos moldes e valores dispostos no Portal do Aluno, em seu item 'Taxas Escolares'. " ,0, "L" ,"");



$pdf->Ln(0.4);
$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"VII - CERTIFICAÇÃO, TCC (ARTIGO CIENTÍFICO) E PASTA DE ESTÁGIO:","",1,'L');
$pdf->Ln(0.4);
$pdf->SetFont('arial','',8);
$pdf->MultiCell(0,0.4, " Eventuais solicitações de emissão de documentos escolares estarão sujeitas a cobrança de taxas, nos moldes e valores dispostos no Portal do Aluno, em seu item 'Taxas Escolares'. " ,0, "L" ,"");





$pdf->Ln(0.4);
$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"VII - CERTIFICAÇÃO, TCC (ARTIGO CIENTÍFICO) E PASTA DE ESTÁGIO:","",1,'L');
$pdf->Ln(0.4);


$pdf->SetFont('arial','',8);
$pdf->MultiCell(0,0.4, "Os trabalhos (TCC e Pasta de Estágio) somente serão corrigidos após quitação total do curso. O Instituto Graduarte não está autorizado, por suas parceiras, a emitir declarações de conclusão de curso, portanto, os certificados serão emitidos por uma Instituição do Ensino Superior devidamente credenciada pelo MEC," ,0, "L" ,"");
$pdf->SetFont('arial','BU',10);
$pdf->Cell(10.7,0.4,"dentro do prazo mínimo de 60 dias e máximo de 150 dias úteis,","",0,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"após o aluno cumprir as seguintes exigências:","",1,'L');

$pdf->Ln(0.4);
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"- Ter entregado toda documentação exigida; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"- Ter cumprido a duração mínima do curso; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"- Ter aprovação em todas as etapas; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"- Ter quitado todas as parcelas do curso; ","",1,'L');
$pdf->Ln(0.2);





$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"VIII - RESCISÃO CONTRATUAL:","",1,'L');



$pdf->SetFont('arial','',8);
$pdf->MultiCell(0,0.4, "O presente documento poderá ser rescindido antes de seu vencimento: " ,0, "L" ,"");


$pdf->Ln(0.4);
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"a) De comum acordo entre as partes; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"b) Pelo Instituto Graduarte, se descumprida uma ou mais cláusulas contratuais; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"c) Ter aprovação em todas as etapas; ","",1,'L');
$pdf->SetFont('arial','',8);
$pdf->Cell(0,0.4,"d) Ter quitado todas as parcelas do curso; ","",1,'L');
$pdf->Ln(0.2);








$pdf->SetFont('arial','B',10);
$pdf->Cell(0,0.4,"IX - CANCELAMENTO/TRANCAMENTO DE CURSO:","",1,'L');
$pdf->Ln(0.4);


$pdf->SetFont('arial','',8);
$pdf->MultiCell(0,0.4, "Aluno que desejar cancelar ou trancar seu curso deverá encaminhar protocolo de serviço, requerimento específico e efetuar o pagamento da taxa, nos moldes e valores dispostos no Portal do Aluno, em seu item “Taxas Escolares”.
	Ao (à) aluno (a) que optar pelo cancelamento e/ou trancamento de seu curso, seja por qual motivo for, NÃO receberá o direito a qualquer ressarcimento, compensação ou indenização do valor pago, sendo o aluno ainda obrigado a adimplir com a multa contratual, conforme disposto.
	" ,0, "L" ,"");


$pdf->Ln(0.4);
$pdf->Cell(0,0.4,"Itaúna/MG,          de                            de 20          .",'',1,'C');
$pdf->Ln(0.4);


$pdf->Cell(4.5,0.4,"",0,0,'L');
$pdf->Cell(10,0.4,"","B",0,'C');
$pdf->Cell(3,0.4,"",0,1,'L');
$pdf->Cell(0,0.4,"ALUNO (Assinatura igual à do documento de identidade",0,0,'C');



	$pdf->Ln(0.8);
	$pdf->Cell(7.5,0.4,"Testemunhas:",'',0,'L');
	$pdf->Ln(0.6);

	$pdf->Cell(0.4,0.4,"1:",'',0,'L');
	$pdf->Cell(8.5,0.4,"_____________________________________",'',0,'L');

	$pdf->Cell(1,0.4,"CPF:",'',0,'L');
	$pdf->Cell(8.5,0.4,"_____________________________________",'',1,'L');


	$pdf->Ln(0.4);

	$pdf->Cell(0.4,0.4,"2:",'',0,'L');
	$pdf->Cell(8.5,0.4,"_____________________________________",'',0,'L');

	$pdf->Cell(1,0.4,"CPF:",'',0,'L');
	$pdf->Cell(8.5,0.4,"_____________________________________",'',1,'L');




// TITULO E TEXTO ------------------------------------------------

// $pdf->Ln(0.4);
// $pdf->SetFont('arial','B',10);
// $pdf->Cell(0,0.4,"I - DAS INFORMAÇÕES CADASTRAIS","",1,'L');

// $pdf->SetFont('arial','',8);
// $pdf->Cell(0,0.9,"texto texto texto texto texto texto texto texto texto texto texto texto :","",1,'L');

// -------------------------------------------------




// TITULO E  MULTILINHAS-----------------------------------------------


// $pdf->Ln(0.4);
// $pdf->SetFont('arial','B',10);
// $pdf->Cell(0,0.4,"I - DAS INFORMAÇÕES CADASTRAIS","",1,'L');
// $pdf->Ln(0.4);


// $pdf->SetFont('arial','',8);
// $pdf->MultiCell(0,0.4, "Fica o (a) aluno (a) obrigado a informar corretamente seu endereço completo no ato da pré-inscrição, bem como todas as eventuais alterações que vierem ocorrer durante a realização do curso ora contratado. A prestação de informações  indevidas e/ou incompletas serão entendidas como ato de má fé, cabendo a aplicação de penalidade própria, bem como a adoção das medidas  judiciais e administrativas cabíveis." ,0, "L" ,"");



// -------------------------------------------------


*/



	$pdf->Output("arquivo.pdf","I");

	?>