<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
    $fecha=$_POST["fecha"];
	
    $sql = "SELECT a1 from preporte WHERE fecha='$fecha'";
	$a1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a2 from preporte WHERE fecha='$fecha'";
	$a2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a3 from preporte WHERE fecha='$fecha'";
	$a3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a4 from preporte WHERE fecha='$fecha'";
	$a4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a5 from preporte WHERE fecha='$fecha'";
	$a5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a6 from preporte WHERE fecha='$fecha'";
	$a6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a7 from preporte WHERE fecha='$fecha'";
	$a7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a8 from preporte WHERE fecha='$fecha'";
	$a8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a9 from preporte WHERE fecha='$fecha'";
	$a9= resultadoIndividual($connection,$sql);
	$sql = "SELECT a10 from preporte WHERE fecha='$fecha'";
	$a10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a11 from preporte WHERE fecha='$fecha'";
	$a11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a12 from preporte WHERE fecha='$fecha'";
	$a12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a13 from preporte WHERE fecha='$fecha'";
	$a13 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a14 from preporte WHERE fecha='$fecha'";
	$a14 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a15 from preporte WHERE fecha='$fecha'";
	$a15 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a16 from preporte WHERE fecha='$fecha'";
	$a16 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a17 from preporte WHERE fecha='$fecha'";
	$a17 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a18 from preporte WHERE fecha='$fecha'";
	$a18 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a19 from preporte WHERE fecha='$fecha'";
	$a19= resultadoIndividual($connection,$sql);
	$sql = "SELECT a20 from preporte WHERE fecha='$fecha'";
	$a20 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a21 from preporte WHERE fecha='$fecha'";
	$a21 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a22 from preporte WHERE fecha='$fecha'";
	$a22 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a23 from preporte WHERE fecha='$fecha'";
	$a23 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a24 from preporte WHERE fecha='$fecha'";
	$a24 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a25 from preporte WHERE fecha='$fecha'";
	$a25 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a26 from preporte WHERE fecha='$fecha'";
	$a26 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a27 from preporte WHERE fecha='$fecha'";
	$a27 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a28 from preporte WHERE fecha='$fecha'";
	$a28 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a29 from preporte WHERE fecha='$fecha'";
	$a29= resultadoIndividual($connection,$sql);
	$sql = "SELECT a30 from preporte WHERE fecha='$fecha'";
	$a30 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a31 from preporte WHERE fecha='$fecha'";
	$a31 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a32 from preporte WHERE fecha='$fecha'";
	$a32 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a33 from preporte WHERE fecha='$fecha'";
	$a33 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a34 from preporte WHERE fecha='$fecha'";
	$a34 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a35 from preporte WHERE fecha='$fecha'";
	$a35 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a36 from preporte WHERE fecha='$fecha'";
	$a36 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a37 from preporte WHERE fecha='$fecha'";
	$a37 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a38 from preporte WHERE fecha='$fecha'";
	$a38 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a39 from preporte WHERE fecha='$fecha'";
	$a39= resultadoIndividual($connection,$sql);
	$sql = "SELECT a40 from preporte WHERE fecha='$fecha'";
	$a40 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a41 from preporte WHERE fecha='$fecha'";
	$a41 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a42 from preporte WHERE fecha='$fecha'";
	$a42 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a43 from preporte WHERE fecha='$fecha'";
	$a43 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a44 from preporte WHERE fecha='$fecha'";
	$a44 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a45 from preporte WHERE fecha='$fecha'";
	$a45 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a46 from preporte WHERE fecha='$fecha'";
	$a46 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a47 from preporte WHERE fecha='$fecha'";
	$a47 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a48 from preporte WHERE fecha='$fecha'";
	$a48 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a49 from preporte WHERE fecha='$fecha'";
	$a49= resultadoIndividual($connection,$sql);
	$sql = "SELECT a50 from preporte WHERE fecha='$fecha'";
	$a50 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a51 from preporte WHERE fecha='$fecha'";
	$a51 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a52 from preporte WHERE fecha='$fecha'";
	$a52 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a53 from preporte WHERE fecha='$fecha'";
	$a53 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a54 from preporte WHERE fecha='$fecha'";
	$a54 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a55 from preporte WHERE fecha='$fecha'";
	$a55 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a56 from preporte WHERE fecha='$fecha'";
	$a56 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a57 from preporte WHERE fecha='$fecha'";
	$a57 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a58 from preporte WHERE fecha='$fecha'";
	$a58 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a59 from preporte WHERE fecha='$fecha'";
	$a59= resultadoIndividual($connection,$sql);
	$sql = "SELECT a60 from preporte WHERE fecha='$fecha'";
	$a60 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a61 from preporte WHERE fecha='$fecha'";
	$a61 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a62 from preporte WHERE fecha='$fecha'";
	$a62 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a63 from preporte WHERE fecha='$fecha'";
	$a63 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a64 from preporte WHERE fecha='$fecha'";
	$a64 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a65 from preporte WHERE fecha='$fecha'";
	$a65 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a66 from preporte WHERE fecha='$fecha'";
	$a66 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a67 from preporte WHERE fecha='$fecha'";
	$a67 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a68 from preporte WHERE fecha='$fecha'";
	$a68 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a69 from preporte WHERE fecha='$fecha'";
	$a69= resultadoIndividual($connection,$sql);
	$sql = "SELECT a70 from preporte WHERE fecha='$fecha'";
	$a70 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a71 from preporte WHERE fecha='$fecha'";
	$a71 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a72 from preporte WHERE fecha='$fecha'";
	$a72 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a73 from preporte WHERE fecha='$fecha'";
	$a73 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a74 from preporte WHERE fecha='$fecha'";
	$a74 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a75 from preporte WHERE fecha='$fecha'";
	$a75 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a76 from preporte WHERE fecha='$fecha'";
	$a76 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a77 from preporte WHERE fecha='$fecha'";
	$a77 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a78 from preporte WHERE fecha='$fecha'";
	$a78 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a79 from preporte WHERE fecha='$fecha'";
	$a79= resultadoIndividual($connection,$sql);
	$sql = "SELECT a80 from preporte WHERE fecha='$fecha'";
	$a80 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a81 from preporte WHERE fecha='$fecha'";
	$a81 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a82 from preporte WHERE fecha='$fecha'";
	$a82 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a83 from preporte WHERE fecha='$fecha'";
	$a83 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a84 from preporte WHERE fecha='$fecha'";
	$a84 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a85 from preporte WHERE fecha='$fecha'";
	$a85 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a86 from preporte WHERE fecha='$fecha'";
	$a86 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a87 from preporte WHERE fecha='$fecha'";
	$a87 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a88 from preporte WHERE fecha='$fecha'";
	$a88 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a89 from preporte WHERE fecha='$fecha'";
	$a89= resultadoIndividual($connection,$sql);
	$sql = "SELECT a90 from preporte WHERE fecha='$fecha'";
	$a90 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a91 from preporte WHERE fecha='$fecha'";
	$a91 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a92 from preporte WHERE fecha='$fecha'";
	$a92 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a93 from preporte WHERE fecha='$fecha'";
	$a93 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a94 from preporte WHERE fecha='$fecha'";
	$a94 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a95 from preporte WHERE fecha='$fecha'";
	$a95 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a96 from preporte WHERE fecha='$fecha'";
	$a96 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a97 from preporte WHERE fecha='$fecha'";
	$a97 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a98 from preporte WHERE fecha='$fecha'";
	$a98 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a99 from preporte WHERE fecha='$fecha'";
	$a99= resultadoIndividual($connection,$sql);
	$sql = "SELECT a100 from preporte WHERE fecha='$fecha'";
	$a100 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a101 from preporte WHERE fecha='$fecha'";
	$a101 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a102 from preporte WHERE fecha='$fecha'";
	$a102 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a103 from preporte WHERE fecha='$fecha'";
	$a103 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a104 from preporte WHERE fecha='$fecha'";
	$a104 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a105 from preporte WHERE fecha='$fecha'";
	$a105 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a106 from preporte WHERE fecha='$fecha'";
	$a106 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a107 from preporte WHERE fecha='$fecha'";
	$a107 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a108 from preporte WHERE fecha='$fecha'";
	$a108 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a109 from preporte WHERE fecha='$fecha'";
	$a109= resultadoIndividual($connection,$sql);
	$sql = "SELECT a110 from preporte WHERE fecha='$fecha'";
	$a110 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a111 from preporte WHERE fecha='$fecha'";
	$a111 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a112 from preporte WHERE fecha='$fecha'";
	$a112 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a113 from preporte WHERE fecha='$fecha'";
	$a113 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a114 from preporte WHERE fecha='$fecha'";
	$a114 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a115 from preporte WHERE fecha='$fecha'";
	$a115 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a116 from preporte WHERE fecha='$fecha'";
	$a116 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a117 from preporte WHERE fecha='$fecha'";
	$a117 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a118 from preporte WHERE fecha='$fecha'";
	$a118 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a119 from preporte WHERE fecha='$fecha'";
	$a119= resultadoIndividual($connection,$sql);
	$sql = "SELECT a120 from preporte WHERE fecha='$fecha'";
	$a120 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a121 from preporte WHERE fecha='$fecha'";
	$a121 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a122 from preporte WHERE fecha='$fecha'";
	$a122 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a123 from preporte WHERE fecha='$fecha'";
	$a123 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a124 from preporte WHERE fecha='$fecha'";
	$a124 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a125 from preporte WHERE fecha='$fecha'";
	$a125 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a126 from preporte WHERE fecha='$fecha'";
	$a126 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a127 from preporte WHERE fecha='$fecha'";
	$a127 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a128 from preporte WHERE fecha='$fecha'";
	$a128 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a129 from preporte WHERE fecha='$fecha'";
	$a129= resultadoIndividual($connection,$sql);
	$sql = "SELECT a130 from preporte WHERE fecha='$fecha'";
	$a130 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a131 from preporte WHERE fecha='$fecha'";
	$a131 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a132 from preporte WHERE fecha='$fecha'";
	$a132 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a133 from preporte WHERE fecha='$fecha'";
	$a133 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a134 from preporte WHERE fecha='$fecha'";
	$a134 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a135 from preporte WHERE fecha='$fecha'";
	$a135 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a136 from preporte WHERE fecha='$fecha'";
	$a136 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a137 from preporte WHERE fecha='$fecha'";
	$a137 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a138 from preporte WHERE fecha='$fecha'";
	$a138 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a139 from preporte WHERE fecha='$fecha'";
	$a139= resultadoIndividual($connection,$sql);
	$sql = "SELECT a140 from preporte WHERE fecha='$fecha'";
	$a140 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a141 from preporte WHERE fecha='$fecha'";
	$a141 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a142 from preporte WHERE fecha='$fecha'";
	$a142 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a143 from preporte WHERE fecha='$fecha'";
	$a143 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a144 from preporte WHERE fecha='$fecha'";
	$a144 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a145 from preporte WHERE fecha='$fecha'";
	$a145 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a146 from preporte WHERE fecha='$fecha'";
	$a146 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a147 from preporte WHERE fecha='$fecha'";
	$a147 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a148 from preporte WHERE fecha='$fecha'";
	$a148 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a149 from preporte WHERE fecha='$fecha'";
	$a149= resultadoIndividual($connection,$sql);
	$sql = "SELECT a150 from preporte WHERE fecha='$fecha'";
	$a150 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a151 from preporte WHERE fecha='$fecha'";
	$a151 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a152 from preporte WHERE fecha='$fecha'";
	$a152 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a153 from preporte WHERE fecha='$fecha'";
	$a153 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a154 from preporte WHERE fecha='$fecha'";
	$a154 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a155 from preporte WHERE fecha='$fecha'";
	$a155 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a156 from preporte WHERE fecha='$fecha'";
	$a156 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a157 from preporte WHERE fecha='$fecha'";
	$a157 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a158 from preporte WHERE fecha='$fecha'";
	$a158 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a159 from preporte WHERE fecha='$fecha'";
	$a159= resultadoIndividual($connection,$sql);
	$sql = "SELECT a160 from preporte WHERE fecha='$fecha'";
	$a160 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a161 from preporte WHERE fecha='$fecha'";
	$a161 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a162 from preporte WHERE fecha='$fecha'";
	$a162 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a163 from preporte WHERE fecha='$fecha'";
	$a163 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a164 from preporte WHERE fecha='$fecha'";
	$a164 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a165 from preporte WHERE fecha='$fecha'";
	$a165 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a166 from preporte WHERE fecha='$fecha'";
	$a166 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a167 from preporte WHERE fecha='$fecha'";
	$a167 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a168 from preporte WHERE fecha='$fecha'";
	$a168 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a169 from preporte WHERE fecha='$fecha'";
	$a169= resultadoIndividual($connection,$sql);
	$sql = "SELECT a170 from preporte WHERE fecha='$fecha'";
	$a170 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a171 from preporte WHERE fecha='$fecha'";
	$a171 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a172 from preporte WHERE fecha='$fecha'";
	$a172 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a173 from preporte WHERE fecha='$fecha'";
	$a173 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a174 from preporte WHERE fecha='$fecha'";
	$a174 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a175 from preporte WHERE fecha='$fecha'";
	$a175 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a176 from preporte WHERE fecha='$fecha'";
	$a176 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a177 from preporte WHERE fecha='$fecha'";
	$a177 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a178 from preporte WHERE fecha='$fecha'";
	$a178 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a179 from preporte WHERE fecha='$fecha'";
	$a179= resultadoIndividual($connection,$sql);
	$sql = "SELECT a180 from preporte WHERE fecha='$fecha'";
	$a180 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a181 from preporte WHERE fecha='$fecha'";
	$a181 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a182 from preporte WHERE fecha='$fecha'";
	$a182 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a183 from preporte WHERE fecha='$fecha'";
	$a183 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a184 from preporte WHERE fecha='$fecha'";
	$a184 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a185 from preporte WHERE fecha='$fecha'";
	$a185 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a186 from preporte WHERE fecha='$fecha'";
	$a186 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a187 from preporte WHERE fecha='$fecha'";
	$a187 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a188 from preporte WHERE fecha='$fecha'";
	$a188 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a189 from preporte WHERE fecha='$fecha'";
	$a189= resultadoIndividual($connection,$sql);
	$sql = "SELECT a190 from preporte WHERE fecha='$fecha'";
	$a190 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a191 from preporte WHERE fecha='$fecha'";
	$a191 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a192 from preporte WHERE fecha='$fecha'";
	$a192 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a193 from preporte WHERE fecha='$fecha'";
	$a193 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a194 from preporte WHERE fecha='$fecha'";
	$a194 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a195 from preporte WHERE fecha='$fecha'";
	$a195 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a196 from preporte WHERE fecha='$fecha'";
	$a196 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a197 from preporte WHERE fecha='$fecha'";
	$a197 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a198 from preporte WHERE fecha='$fecha'";
	$a198 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a199 from preporte WHERE fecha='$fecha'";
	$a199= resultadoIndividual($connection,$sql);
	$sql = "SELECT a200 from preporte WHERE fecha='$fecha'";
	$a200 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a201 from preporte WHERE fecha='$fecha'";
	$a201 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a202 from preporte WHERE fecha='$fecha'";
	$a202 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a203 from preporte WHERE fecha='$fecha'";
	$a203 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a204 from preporte WHERE fecha='$fecha'";
	$a204 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a205 from preporte WHERE fecha='$fecha'";
	$a205 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a206 from preporte WHERE fecha='$fecha'";
	$a206 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a207 from preporte WHERE fecha='$fecha'";
	$a207 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a208 from preporte WHERE fecha='$fecha'";
	$a208 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a209 from preporte WHERE fecha='$fecha'";
	$a209= resultadoIndividual($connection,$sql);
	$sql = "SELECT a210 from preporte WHERE fecha='$fecha'";
	$a210 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a211 from preporte WHERE fecha='$fecha'";
	$a211 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a212 from preporte WHERE fecha='$fecha'";
	$a212 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a213 from preporte WHERE fecha='$fecha'";
	$a213 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a214 from preporte WHERE fecha='$fecha'";
	$a214 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a215 from preporte WHERE fecha='$fecha'";
	$a215 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a216 from preporte WHERE fecha='$fecha'";
	$a216 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a217 from preporte WHERE fecha='$fecha'";
	$a217 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a218 from preporte WHERE fecha='$fecha'";
	$a218 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a219 from preporte WHERE fecha='$fecha'";
	$a219= resultadoIndividual($connection,$sql);
	$sql = "SELECT a220 from preporte WHERE fecha='$fecha'";
	$a220 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a221 from preporte WHERE fecha='$fecha'";
	$a221 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a222 from preporte WHERE fecha='$fecha'";
	$a222 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a223 from preporte WHERE fecha='$fecha'";
	$a223 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a224 from preporte WHERE fecha='$fecha'";
	$a224 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a225 from preporte WHERE fecha='$fecha'";
	$a225 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a226 from preporte WHERE fecha='$fecha'";
	$a226 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a227 from preporte WHERE fecha='$fecha'";
	$a227 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a228 from preporte WHERE fecha='$fecha'";
	$a228 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a229 from preporte WHERE fecha='$fecha'";
	$a229= resultadoIndividual($connection,$sql);
	$sql = "SELECT a230 from preporte WHERE fecha='$fecha'";
	$a230 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a231 from preporte WHERE fecha='$fecha'";
	$a231 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a232 from preporte WHERE fecha='$fecha'";
	$a232 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a233 from preporte WHERE fecha='$fecha'";
	$a233 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a234 from preporte WHERE fecha='$fecha'";
	$a234 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a235 from preporte WHERE fecha='$fecha'";
	$a235 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a236 from preporte WHERE fecha='$fecha'";
	$a236 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a237 from preporte WHERE fecha='$fecha'";
	$a237 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a238 from preporte WHERE fecha='$fecha'";
	$a238 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a239 from preporte WHERE fecha='$fecha'";
	$a239= resultadoIndividual($connection,$sql);
	$sql = "SELECT a240 from preporte WHERE fecha='$fecha'";
	$a240 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a241 from preporte WHERE fecha='$fecha'";
	$a241 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a242 from preporte WHERE fecha='$fecha'";
	$a242 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a243 from preporte WHERE fecha='$fecha'";
	$a243 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a244 from preporte WHERE fecha='$fecha'";
	$a244 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a245 from preporte WHERE fecha='$fecha'";
	$a245 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a246 from preporte WHERE fecha='$fecha'";
	$a246 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a247 from preporte WHERE fecha='$fecha'";
	$a247 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a248 from preporte WHERE fecha='$fecha'";
	$a248 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a249 from preporte WHERE fecha='$fecha'";
	$a249= resultadoIndividual($connection,$sql);
	$sql = "SELECT a250 from preporte WHERE fecha='$fecha'";
	$a250 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a251 from preporte WHERE fecha='$fecha'";
	$a251 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a252 from preporte WHERE fecha='$fecha'";
	$a252 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a253 from preporte WHERE fecha='$fecha'";
	$a253 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a254 from preporte WHERE fecha='$fecha'";
	$a254 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a255 from preporte WHERE fecha='$fecha'";
	$a255 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a256 from preporte WHERE fecha='$fecha'";
	$a256 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a257 from preporte WHERE fecha='$fecha'";
	$a257 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a258 from preporte WHERE fecha='$fecha'";
	$a258 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a259 from preporte WHERE fecha='$fecha'";
	$a259= resultadoIndividual($connection,$sql);
	$sql = "SELECT a260 from preporte WHERE fecha='$fecha'";
	$a260 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a261 from preporte WHERE fecha='$fecha'";
	$a261 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a262 from preporte WHERE fecha='$fecha'";
	$a262 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a263 from preporte WHERE fecha='$fecha'";
	$a263 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a264 from preporte WHERE fecha='$fecha'";
	$a264 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a265 from preporte WHERE fecha='$fecha'";
	$a265 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a266 from preporte WHERE fecha='$fecha'";
	$a266 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a267 from preporte WHERE fecha='$fecha'";
	$a267 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a268 from preporte WHERE fecha='$fecha'";
	$a268 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a269 from preporte WHERE fecha='$fecha'";
	$a269= resultadoIndividual($connection,$sql);
	$sql = "SELECT a270 from preporte WHERE fecha='$fecha'";
	$a270 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a271 from preporte WHERE fecha='$fecha'";
	$a271 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a272 from preporte WHERE fecha='$fecha'";
	$a272 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a273 from preporte WHERE fecha='$fecha'";
	$a273 = resultadoIndividual($connection,$sql);
	
	
?>
<html>
<head>
		
  <!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="calendar-blue.css" title="winter" />

  <!-- librería principal del calendario -->
  <script type="text/javascript" src="javascript/calendar.js"></script>

  <!-- librería para cargar el lenguaje deseado -->
  <script type="text/javascript" src="javascript/lang/calendar-es.js"></script>

  <!-- librería que declara la función Calendar.setup, que ayuda a generar un calendario en unas pocas líneas de código -->
  <script type="text/javascript" src="javascript/calendar-setup.js"></script>
	
</head>

<body>
<br />
<br />

<h3 align="center">Reporte de Estaciones de Bombeo</h1>

<!-- formu lario con el campo de texto y el botón para lanzar el calendario-->
<form method="post">
<td align=center>Fecha</td><input type="text" name="fecha"  id="fecha" value="<? echo $fecha ?>"/>
<input type="button" id="lanzador"  value="..." />


<!-- script que define y configura el calendario-->
<script type="text/javascript">
    Calendar.setup({
        inputField     :    "fecha",      // id del campo de texto
        ifFormat       :    "%d/%m/%Y",       // formato de la fecha, cuando se escriba en el campo de texto
        button         :    "lanzador"   // el id del botón que lanzará el calendario
    });
</script>

</html>
<table width="50" border="2">
<tr>
    <td align=center>Hora</td>
    <td align=center>Caraqueña</td>
    <td align=center>Guanta</td>
    <td align=center>Guanta</td>
    <td align=center>Pozuelo</td>
    <td align=center>V.Lindo</td>
    <td align=center>V.Verde</td>
    <td align=center>Morro</td>
  </tr>
	<tr>
    <td align=center>5 AM</td>
    <td align=center ><table width="50" border="2">
<tr>
    <td align=center>P.S</td>
    <td align=center><input name="a1" type="text"  id="a1"  value="<? echo $a1 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.CH#:</td>
    <td align=center><input name="a2" type="text" id="a2"  value="<? echo $a2 ?>" size="5" ></td>
    <td align=center><input name="a3" type="text" id="a3"  value="<? echo $a3 ?>" size="5" ></td>
    <td align=center><input name="a4" type="text" id="a4"  value="<? echo $a4 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq. M#:</td>
    <td align=center><input name="a5" type="text" id="a5"  value="<? echo $a5 ?>" size="5" ></td>
    <td align=center><input name="a6" type="text" id="a6"  value="<? echo $a6 ?>" size="5" ></td>
    <td align=center><input name="a7" type="text" id="a7"  value="<? echo $a7 ?>" size="5" ></td>
    <tr>
	<td align=center>P.D.M:</td>
    <td align=center><input name="a8" type="text" id="a8"  value="<? echo $a8 ?>" size="5" ></td>
   </tr>
   <tr>
   <td align=center>P.D.CH:</td>
    <td align=center><input name="a9" type="text" id="a9"  value="<? echo $a9 ?>" size="5" ></td>
   	</tr>
</table></td>
    <td align=center><table width="20" border="2">
	<tr>
    <td align=center>Nº V.A#1</td>
    <td align=center>Nº V.A#2</td>
    <td align=center>Nº V.A#3</td>
    </tr>
	<tr>
    <td align=center><input name="a10" type="text" id="a10"  value="<? echo $a10 ?>" size="5" ></td>
    <td align=center><input name="a11" type="text" id="a11"  value="<? echo $a11 ?>" size="5" ></td>
	<td align=center><input name="a12" type="text" id="a12"  value="<? echo $a12 ?>" size="5" ></td>
   	</tr>
	<tr>
    <td align=center >H X-7 d 1 eq</td>
    <td align=center >H X-8 d 1 eq</td>
	<td align=center >Tiempo de X-7</td>
    </tr>
	<tr>
    <td align=center><input name="a13" type="text" id="a13"  value="<? echo $a13 ?>" size="5" ></td>
    <td align=center><input name="a14" type="text" id="a14"  value="<? echo $a14 ?>" size="5" ></td>
	<td align=center><input name="a15" type="text" id="a15"  value="<? echo $a15 ?>" size="5" ></td>
    </tr>
		
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D</td>
    <td align=center><input name="a16" type="text"  id="a16"  value="<? echo $a16 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a17" type="text" id="a17"  value="<? echo $a17 ?>" size="5" ></td>
    <td align=center><input name="a18" type="text" id="a18"  value="<? echo $a18 ?>" size="5" ></td>
    <td align=center><input name="a19" type="text" id="a19"  value="<? echo $a19 ?>" size="5" ></td>
   </tr>
	<tr>
    <td align=center>NºV.A</td>
    <td align=center><input name="a20" type="text" id="a20"  value="<? echo $a20 ?>" size="5" ></td>
    </tr>
	<tr>
	<td align=center>Nivel Tanq</td>
    <td align=center><input name="a21" type="text" id="a21"  value="<? echo $a21 ?>" size="5" ></td>
   
   	</tr>
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a22" type="text"  id="a22"  value="<? echo $a22 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a23" type="text" id="a23"  value="<? echo $a23 ?>" size="5" ></td>
    <td align=center><input name="a24" type="text" id="a24"  value="<? echo $a24 ?>" size="5" ></td>
    <td align=center><input name="a25" type="text" id="a25"  value="<? echo $a25 ?>" size="5" ></td>
   </tr>
</table></td>
    <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a26" type="text"  id="a26"  value="<? echo $a26 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a27" type="text" id="a27"  value="<? echo $a27 ?>" size="5" ></td>
    <td align=center><input name="a28" type="text" id="a28"  value="<? echo $a28 ?>" size="5" ></td>
    <td align=center><input name="a29" type="text" id="a29"  value="<? echo $a29 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>Q:</td>
    <td align=center><input name="a30" type="text"  id="a30"  value="<? echo $a30 ?>" size="5" ></td>
    </tr>
</table></td>
   <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a31" type="text"  id="a31"  value="<? echo $a31 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a32" type="text" id="a32"  value="<? echo $a32 ?>" size="5" ></td>
    <td align=center><input name="a33" type="text" id="a33"  value="<? echo $a33 ?>" size="5" ></td>
    <td align=center><input name="a34" type="text" id="a34"  value="<? echo $a34 ?>" size="5" ></td>
   </tr>
</table></td>
<td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.S:</td>
    <td align=center><input name="a35" type="text"  id="a35"  value="<? echo $a35 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a36" type="text" id="a36"  value="<? echo $a36 ?>" size="5" ></td>
    <td align=center><input name="a37" type="text" id="a37"  value="<? echo $a37 ?>" size="5" ></td>
    <td align=center><input name="a38" type="text" id="a38"  value="<? echo $a38 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a39" type="text"  id="a39"  value="<? echo $a39 ?>" size="5" ></td>
    </tr>
</table></td>
   	</tr>
	<tr>
    <td align=center>7 AM</td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.S</td>
    <td align=center><input name="a40" type="text"  id="a40"  value="<? echo $a40 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.CH#:</td>
    <td align=center><input name="a41" type="text" id="a41"  value="<? echo $a41 ?>" size="5" ></td>
    <td align=center><input name="a42" type="text" id="a42"  value="<? echo $a42 ?>" size="5" ></td>
    <td align=center><input name="a43" type="text" id="a43"  value="<? echo $a43 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq. M#:</td>
    <td align=center><input name="a44" type="text" id="a44"  value="<? echo $a44 ?>" size="5" ></td>
    <td align=center><input name="a45" type="text" id="a45"  value="<? echo $a45 ?>" size="5" ></td>
    <td align=center><input name="a46" type="text" id="a46"  value="<? echo $a46 ?>" size="5" ></td>
    <tr>
	<td align=center>P.D.M:</td>
    <td align=center><input name="a47" type="text" id="a47"  value="<? echo $a47 ?>" size="5" ></td>
   </tr>
   <tr>
   <td align=center>P.D.CH:</td>
    <td align=center><input name="a48" type="text" id="a48"  value="<? echo $a48 ?>" size="5" ></td>
   	</tr>
</table></td>
    <td align=center><table width="20" border="2">
	<tr>
    <td align=center>Nº V.A#1</td>
    <td align=center>Nº V.A#2</td>
    <td align=center>Nº V.A#3</td>
    </tr>
	<tr>
    <td align=center><input name="a49" type="text" id="a49"  value="<? echo $a49 ?>" size="5" ></td>
    <td align=center><input name="a50" type="text" id="a50"  value="<? echo $a50 ?>" size="5" ></td>
	<td align=center><input name="a51" type="text" id="a51"  value="<? echo $a51 ?>" size="5" ></td>
   	</tr>
	<tr>
    <td align=center >H X-7 d 1 eq</td>
    <td align=center >H X-8 d 1 eq</td>
	<td align=center >Tiempo de X-7</td>
    </tr>
	<tr>
    <td align=center><input name="a52" type="text" id="a52"  value="<? echo $a52 ?>" size="5" ></td>
    <td align=center><input name="a53" type="text" id="a53"  value="<? echo $a53 ?>" size="5" ></td>
	<td align=center><input name="a54" type="text" id="a54"  value="<? echo $a54 ?>" size="5" ></td>
    </tr>
		
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D</td>
    <td align=center><input name="a55" type="text"  id="a55"  value="<? echo $a55 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a56" type="text"  id="a56"  value="<? echo $a56 ?>" size="5" ></td>
    <td align=center><input name="a57" type="text" id="a57"  value="<? echo $a57 ?>" size="5" ></td>
    <td align=center><input name="a58" type="text" id="a58"  value="<? echo $a58 ?>" size="5" ></td>
   </tr>
	<tr>
    <td align=center>NºV.A</td>
    <td align=center><input name="a59" type="text" id="a59"  value="<? echo $a59 ?>" size="5" ></td>
    </tr>
	<tr>
	<td align=center>Nivel Tanq</td>
    <td align=center><input name="a60" type="text" id="a60"  value="<? echo $a60 ?>" size="5" ></td>
   
   	</tr>
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a61" type="text"  id="a61"  value="<? echo $a61 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a62" type="text" id="a62"  value="<? echo $a62 ?>" size="5" ></td>
    <td align=center><input name="a63" type="text" id="a63"  value="<? echo $a63 ?>" size="5" ></td>
    <td align=center><input name="a64" type="text" id="a64"  value="<? echo $a64 ?>" size="5" ></td>
   </tr>
</table></td>
    <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a65" type="text"  id="a65"  value="<? echo $a65 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a66" type="text" id="a66"  value="<? echo $a66 ?>" size="5" ></td>
    <td align=center><input name="a67" type="text" id="a67"  value="<? echo $a67 ?>" size="5" ></td>
    <td align=center><input name="a68" type="text" id="a68"  value="<? echo $a68 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>Q:</td>
    <td align=center><input name="a69" type="text"  id="a69"  value="<? echo $a69 ?>" size="5" ></td>
    </tr>
</table></td>
   <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a70" type="text"  id="a70"  value="<? echo $a70 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a71" type="text" id="a71"  value="<? echo $a71 ?>" size="5" ></td>
    <td align=center><input name="a72" type="text" id="a72"  value="<? echo $a72 ?>" size="5" ></td>
    <td align=center><input name="a73" type="text" id="a73"  value="<? echo $a73?>" size="5" ></td>
   </tr>
</table></td>
 <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.S:</td>
    <td align=center><input name="a74" type="text"  id="a74"  value="<? echo $a74 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a75" type="text" id="a75"  value="<? echo $a75 ?>" size="5" ></td>
    <td align=center><input name="a76" type="text" id="a76"  value="<? echo $a76 ?>" size="5" ></td>
    <td align=center><input name="a77" type="text" id="a77"  value="<? echo $a77 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a78" type="text"  id="a78"  value="<? echo $a78 ?>" size="5" ></td>
    </tr>
</table></td>
   	</tr>
	<tr>
    <td align=center>11 AM</td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.S</td>
    <td align=center><input name="a79" type="text"  id="a79"  value="<? echo $a79 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.CH#:</td>
    <td align=center><input name="a80" type="text"  id="a80"  value="<? echo $a80 ?>" size="5" ></td>
    <td align=center><input name="a81" type="text" id="a81"  value="<? echo $a81 ?>" size="5" ></td>
    <td align=center><input name="a82" type="text" id="a82"  value="<? echo $a82 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq. M#:</td>
    <td align=center><input name="a83" type="text" id="a83"  value="<? echo $a83 ?>" size="5" ></td>
    <td align=center><input name="a84" type="text" id="a84"  value="<? echo $a84 ?>" size="5" ></td>
    <td align=center><input name="a85" type="text" id="a85"  value="<? echo $a85 ?>" size="5" ></td>
    <tr>
	<td align=center>P.D.M:</td>
    <td align=center><input name="a86" type="text" id="a86"  value="<? echo $a86 ?>" size="5" ></td>
   </tr>
   <tr>
   <td align=center>P.D.CH:</td>
    <td align=center><input name="a87" type="text" id="a87"  value="<? echo $a87 ?>" size="5" ></td>
   	</tr>
</table></td>
    <td align=center><table width="20" border="2">
	<tr>
    <td align=center>Nº V.A#1</td>
    <td align=center>Nº V.A#2</td>
    <td align=center>Nº V.A#3</td>
    </tr>
	<tr>
    <td align=center><input name="a88" type="text" id="a88"  value="<? echo $a88 ?>" size="5" ></td>
    <td align=center><input name="a89" type="text" id="a89"  value="<? echo $a89 ?>" size="5" ></td>
	<td align=center><input name="a90" type="text" id="a90"  value="<? echo $a90 ?>" size="5" ></td>
   	</tr>
	<tr>
    <td align=center >H X-7 d 1 eq</td>
    <td align=center >H X-8 d 1 eq</td>
	<td align=center >Tiempo de X-7</td>
    </tr>
	<tr>
    <td align=center><input name="a91" type="text" id="a91"  value="<? echo $a91 ?>" size="5" ></td>
    <td align=center><input name="a92" type="text" id="a92"  value="<? echo $a92 ?>" size="5" ></td>
	<td align=center><input name="a93" type="text" id="a93"  value="<? echo $a93?>" size="5" ></td>
    </tr>
		
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D</td>
    <td align=center><input name="a94" type="text"  id="a94"  value="<? echo $a94 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a95" type="text"  id="a95"  value="<? echo $a95 ?>" size="5" ></td>
    <td align=center><input name="a96" type="text" id="a96"  value="<? echo $a96 ?>" size="5" ></td>
    <td align=center><input name="a97" type="text" id="a97"  value="<? echo $a97 ?>" size="5" ></td>
   </tr>
	<tr>
    <td align=center>NºV.A</td>
    <td align=center><input name="a98" type="text" id="a98"  value="<? echo $a98 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Nivel Tanq</td>
    <td align=center><input name="a99" type="text" id="a99"  value="<? echo $a99 ?>" size="5" ></td>
   
   	</tr>
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a100" type="text"  id="a100"  value="<? echo $a100 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a101" type="text" id="a101"  value="<? echo $a101 ?>" size="5" ></td>
    <td align=center><input name="a102" type="text" id="a102"  value="<? echo $a102 ?>" size="5" ></td>
    <td align=center><input name="a103" type="text" id="a103"  value="<? echo $a103 ?>" size="5" ></td>
   </tr>
</table></td>
    <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a104" type="text"  id="a104"  value="<? echo $a104 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a105" type="text" id="a105"  value="<? echo $a105 ?>" size="5" ></td>
    <td align=center><input name="a106" type="text" id="a106"  value="<? echo $a106 ?>" size="5" ></td>
    <td align=center><input name="a107" type="text" id="a107"  value="<? echo $a107 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>Q:</td>
    <td align=center><input name="a108" type="text"  id="a108"  value="<? echo $a108 ?>" size="5" ></td>
    </tr>
</table></td>
   <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a109" type="text"  id="a109"  value="<? echo $a109 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a110" type="text" id="a110"  value="<? echo $a110 ?>" size="5" ></td>
    <td align=center><input name="a111" type="text" id="a111"  value="<? echo $a111 ?>" size="5" ></td>
    <td align=center><input name="a112" type="text" id="a112"  value="<? echo $a112 ?>" size="5" ></td>
   </tr>
</table></td>
  <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.S:</td>
    <td align=center><input name="a113" type="text"  id="a113"  value="<? echo $a113 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a114" type="text" id="a114"  value="<? echo $a114 ?>" size="5" ></td>
    <td align=center><input name="a115" type="text" id="a115"  value="<? echo $a115 ?>" size="5" ></td>
    <td align=center><input name="a116" type="text" id="a116"  value="<? echo $a116 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a117" type="text"  id="a117"  value="<? echo $a117 ?>" size="5" ></td>
    </tr>
</table></td>
   	</tr>
	<tr>
    <td align=center>1 PM</td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.S</td>
    <td align=center><input name="a118" type="text"  id="a118"  value="<? echo $a118 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.CH#:</td>
    <td align=center><input name="a119" type="text"  id="a119"  value="<? echo $a119 ?>" size="5" ></td>
    <td align=center><input name="a120" type="text" id="a120"  value="<? echo $a120 ?>" size="5" ></td>
    <td align=center><input name="a121" type="text" id="a121"  value="<? echo $a121 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq. M#:</td>
    <td align=center><input name="a122" type="text" id="a122"  value="<? echo $a122 ?>" size="5" ></td>
    <td align=center><input name="a123" type="text" id="a123"  value="<? echo $a123 ?>" size="5" ></td>
    <td align=center><input name="a124" type="text" id="a124"  value="<? echo $a124 ?>" size="5" ></td>
    <tr>
	<td align=center>P.D.M:</td>
    <td align=center><input name="a125" type="text" id="a125"  value="<? echo $a125 ?>" size="5" ></td>
   </tr>
   <tr>
   <td align=center>P.D.CH:</td>
    <td align=center><input name="a126" type="text" id="a126"  value="<? echo $a126 ?>" size="5" ></td>
   	</tr>
</table></td>
    <td align=center><table width="20" border="2">
	<tr>
    <td align=center>Nº V.A#1</td>
    <td align=center>Nº V.A#2</td>
    <td align=center>Nº V.A#3</td>
    </tr>
	<tr>
    <td align=center><input name="a127" type="text" id="a127"  value="<? echo $a127 ?>" size="5" ></td>
    <td align=center><input name="a128" type="text" id="a128"  value="<? echo $a128 ?>" size="5" ></td>
	<td align=center><input name="a129" type="text" id="a129"  value="<? echo $a129 ?>" size="5" ></td>
   	</tr>
	<tr>
    <td align=center >H X-7 d 1 eq</td>
    <td align=center >H X-8 d 1 eq</td>
	<td align=center >Tiempo de X-7</td>
    </tr>
	<tr>
    <td align=center><input name="a130" type="text" id="a130"  value="<? echo $a130 ?>" size="5" ></td>
    <td align=center><input name="a131" type="text" id="a131"  value="<? echo $a131 ?>" size="5" ></td>
	<td align=center><input name="a132" type="text" id="a132"  value="<? echo $a132 ?>" size="5" ></td>
    </tr>
		
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D</td>
    <td align=center><input name="a133" type="text"  id="a133"  value="<? echo $a133 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a134" type="text" id="a134"  value="<? echo $a134 ?>" size="5" ></td>
    <td align=center><input name="a135" type="text" id="a135"  value="<? echo $a135 ?>" size="5" ></td>
    <td align=center><input name="a136" type="text" id="a136"  value="<? echo $a136 ?>" size="5" ></td>
   </tr>
	<tr>
    <td align=center>NºV.A</td>
    <td align=center><input name="a137" type="text" id="a137"  value="<? echo $a137 ?>" size="5" ></td>
    </tr>
	<tr>
	<td align=center>Nivel Tanq</td>
    <td align=center><input name="a138" type="text" id="a138"  value="<? echo $a138 ?>" size="5" ></td>
   
   	</tr>
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a139" type="text"  id="a139"  value="<? echo $a139 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a140" type="text" id="a140"  value="<? echo $a140 ?>" size="5" ></td>
    <td align=center><input name="a141" type="text" id="a141"  value="<? echo $a141 ?>" size="5" ></td>
    <td align=center><input name="a142" type="text" id="a142"  value="<? echo $a142 ?>" size="5" ></td>
   </tr>
</table></td>
    <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a143" type="text"  id="a143"  value="<? echo $a143 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a144" type="text" id="a144"  value="<? echo $a144 ?>" size="5" ></td>
    <td align=center><input name="a145" type="text" id="a145"  value="<? echo $a145 ?>" size="5" ></td>
    <td align=center><input name="a146" type="text" id="a146"  value="<? echo $a146 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>Q:</td>
    <td align=center><input name="a147" type="text"  id="a147"  value="<? echo $a147 ?>" size="5" ></td>
    </tr>
</table></td>
   <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a148" type="text"  id="a148"  value="<? echo $a148 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a149" type="text" id="a149"  value="<? echo $a149 ?>" size="5" ></td>
    <td align=center><input name="a150" type="text" id="a150"  value="<? echo $a150 ?>" size="5" ></td>
    <td align=center><input name="a151" type="text" id="a151"  value="<? echo $a151 ?>" size="5" ></td>
   </tr>
</table></td>
   <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.S:</td>
    <td align=center><input name="a152" type="text"  id="a152"  value="<? echo $a152 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a153" type="text" id="a153"  value="<? echo $a153 ?>" size="5" ></td>
    <td align=center><input name="a154" type="text" id="a154"  value="<? echo $a154 ?>" size="5" ></td>
    <td align=center><input name="a155" type="text" id="a155"  value="<? echo $a155 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a156" type="text"  id="a156"  value="<? echo $a156 ?>" size="5" ></td>
    </tr>
</table></td>
   	</tr>
	<tr>
    <td align=center>5 PM</td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.S</td>
    <td align=center><input name="a157" type="text"  id="a157"  value="<? echo $a157 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.CH#:</td>
    <td align=center><input name="a158" type="text" id="a158"  value="<? echo $a158 ?>" size="5" ></td>
    <td align=center><input name="a159" type="text" id="a159"  value="<? echo $a159 ?>" size="5" ></td>
    <td align=center><input name="a160" type="text" id="a160"  value="<? echo $a160 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq. M#:</td>
    <td align=center><input name="a161" type="text" id="a161"  value="<? echo $a161 ?>" size="5" ></td>
    <td align=center><input name="a162" type="text" id="a162"  value="<? echo $a162 ?>" size="5" ></td>
    <td align=center><input name="a163" type="text" id="a163"  value="<? echo $a163 ?>" size="5" ></td>
    <tr>
	<td align=center>P.D.M:</td>
    <td align=center><input name="a164" type="text" id="a164"  value="<? echo $a164 ?>" size="5" ></td>
   </tr>
   <tr>
   <td align=center>P.D.CH:</td>
    <td align=center><input name="a165" type="text" id="a165"  value="<? echo $a165 ?>" size="5" ></td>
   	</tr>
</table></td>
    <td align=center><table width="20" border="2">
	<tr>
    <td align=center>Nº V.A#1</td>
    <td align=center>Nº V.A#2</td>
    <td align=center>Nº V.A#3</td>
    </tr>
	<tr>
    <td align=center><input name="a166" type="text" id="a166"  value="<? echo $a166 ?>" size="5" ></td>
    <td align=center><input name="a167" type="text" id="a167"  value="<? echo $a167 ?>" size="5" ></td>
	<td align=center><input name="a168" type="text" id="a168"  value="<? echo $a168 ?>" size="5" ></td>
   	</tr>
	<tr>
    <td align=center >H X-7 d 1 eq</td>
    <td align=center >H X-8 d 1 eq</td>
	<td align=center >Tiempo de X-7</td>
    </tr>
	<tr>
    <td align=center><input name="a169" type="text" id="a169"  value="<? echo $a169 ?>" size="5" ></td>
    <td align=center><input name="a170" type="text" id="a170"  value="<? echo $a170 ?>" size="5" ></td>
	<td align=center><input name="a171" type="text" id="a171"  value="<? echo $a171 ?>" size="5" ></td>
    </tr>
		
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D</td>
    <td align=center><input name="a172" type="text"  id="a172"  value="<? echo $a172 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a173" type="text"  id="a173"  value="<? echo $a173 ?>" size="5" ></td>
    <td align=center><input name="a174" type="text" id="a174"  value="<? echo $a174 ?>" size="5" ></td>
    <td align=center><input name="a175" type="text" id="a175"  value="<? echo $a175 ?>" size="5" ></td>
   </tr>
	<tr>
    <td align=center>NºV.A</td>
    <td align=center><input name="a176" type="text" id="a176"  value="<? echo $a176 ?>" size="5" ></td>
	</tr>
	<tr>
    <td align=center>Nivel Tanq</td>
    <td align=center><input name="a177" type="text" id="a177"  value="<? echo $a177 ?>" size="5" ></td>
   
   	</tr>
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a178" type="text"  id="a178"  value="<? echo $a178 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a179" type="text" id="a179"  value="<? echo $a179 ?>" size="5" ></td>
    <td align=center><input name="a180" type="text" id="a180"  value="<? echo $a180 ?>" size="5" ></td>
    <td align=center><input name="a181" type="text" id="a181"  value="<? echo $a181 ?>" size="5" ></td>
   </tr>
</table></td>
    <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a182" type="text"  id="a182"  value="<? echo $a182 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a183" type="text" id="a183"  value="<? echo $a183 ?>" size="5" ></td>
    <td align=center><input name="a184" type="text" id="a184"  value="<? echo $a184 ?>" size="5" ></td>
    <td align=center><input name="a185" type="text" id="a185"  value="<? echo $a185 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>Q:</td>
    <td align=center><input name="a186" type="text"  id="a186"  value="<? echo $a186 ?>" size="5" ></td>
    </tr>
</table></td>
   <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a187" type="text"  id="a187"  value="<? echo $a187 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a188" type="text" id="a188"  value="<? echo $a188 ?>" size="5" ></td>
    <td align=center><input name="a189" type="text" id="a189"  value="<? echo $a189 ?>" size="5" ></td>
    <td align=center><input name="a190" type="text" id="a190"  value="<? echo $a190 ?>" size="5" ></td>
   </tr>
</table></td>
 <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.S:</td>
    <td align=center><input name="a191" type="text"  id="a191"  value="<? echo $a191 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a192" type="text" id="a192"  value="<? echo $a192 ?>" size="5" ></td>
    <td align=center><input name="a193" type="text" id="a193"  value="<? echo $a193 ?>" size="5" ></td>
    <td align=center><input name="a194" type="text" id="a194"  value="<? echo $a194 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a195" type="text"  id="a195"  value="<? echo $a195 ?>" size="5" ></td>
    </tr>
</table></td>
   	</tr>
	<tr>
    <td align=center>9 PM</td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.S</td>
    <td align=center><input name="a196" type="text"  id="a196"  value="<? echo $a196 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.CH#:</td>
    <td align=center><input name="a197" type="text" id="a197"  value="<? echo $a197 ?>" size="5" ></td>
    <td align=center><input name="a198" type="text" id="a198"  value="<? echo $a198 ?>" size="5" ></td>
    <td align=center><input name="a199" type="text" id="a199"  value="<? echo $a199 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq. M#:</td>
    <td align=center><input name="a200" type="text" id="a200"  value="<? echo $a200 ?>" size="5" ></td>
    <td align=center><input name="a201" type="text" id="a201"  value="<? echo $a201 ?>" size="5" ></td>
    <td align=center><input name="a202" type="text" id="a202"  value="<? echo $a202 ?>" size="5" ></td>
    <tr>
	<td align=center>P.D.M:</td>
    <td align=center><input name="a203" type="text" id="a203"  value="<? echo $a203 ?>" size="5" ></td>
   </tr>
   <tr>
   <td align=center>P.D.CH:</td>
    <td align=center><input name="a204" type="text" id="a204"  value="<? echo $a204 ?>" size="5" ></td>
   	</tr>
</table></td>
    <td align=center><table width="20" border="2">
	<tr>
    <td align=center>Nº V.A#1</td>
    <td align=center>Nº V.A#2</td>
    <td align=center>Nº V.A#3</td>
    </tr>
	<tr>
    <td align=center><input name="a205" type="text" id="a205"  value="<? echo $a205 ?>" size="5" ></td>
    <td align=center><input name="a206" type="text" id="a206"  value="<? echo $a206 ?>" size="5" ></td>
	<td align=center><input name="a207" type="text" id="a207"  value="<? echo $a207 ?>" size="5" ></td>
   	</tr>
	<tr>
    <td align=center >H X-7 d 1 eq</td>
    <td align=center >H X-8 d 1 eq</td>
	<td align=center >Tiempo de X-7</td>
    </tr>
	<tr>
    <td align=center><input name="a208" type="text" id="a208"  value="<? echo $a208 ?>" size="5" ></td>
    <td align=center><input name="a209" type="text" id="a209"  value="<? echo $a209 ?>" size="5" ></td>
	<td align=center><input name="a210" type="text" id="a210"  value="<? echo $a210 ?>" size="5" ></td>
    </tr>
		
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D</td>
    <td align=center><input name="a211" type="text"  id="a211"  value="<? echo $a211 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a212" type="text"  id="a212"  value="<? echo $a212 ?>" size="5" ></td>
    <td align=center><input name="a213" type="text" id="a213"  value="<? echo $a213 ?>" size="5" ></td>
    <td align=center><input name="a214" type="text" id="a214"  value="<? echo $a214 ?>" size="5" ></td>
   </tr>
	<tr>
    <td align=center>NºV.A</td>
    <td align=center><input name="a215" type="text" id="a215"  value="<? echo $a215 ?>" size="5" ></td>
	</tr>
	<tr>
    <td align=center>Nivel Tanq</td>
    <td align=center><input name="a216" type="text" id="a216"  value="<? echo $a216 ?>" size="5" ></td>
   
   	</tr>
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a217" type="text"  id="a217"  value="<? echo $a217 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a218" type="text" id="a218"  value="<? echo $a218 ?>" size="5" ></td>
    <td align=center><input name="a219" type="text" id="a219"  value="<? echo $a219 ?>" size="5" ></td>
    <td align=center><input name="a220" type="text" id="a220"  value="<? echo $a220 ?>" size="5" ></td>
   </tr>
</table></td>
    <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a221" type="text"  id="a221"  value="<? echo $a221 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a222" type="text" id="a222"  value="<? echo $a222 ?>" size="5" ></td>
    <td align=center><input name="a223" type="text" id="a223"  value="<? echo $a223 ?>" size="5" ></td>
    <td align=center><input name="a224" type="text" id="a224"  value="<? echo $a224 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>Q:</td>
    <td align=center><input name="a225" type="text"  id="a225"  value="<? echo $a225?>" size="5" ></td>
    </tr>
</table></td>
   <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a226" type="text"  id="a226"  value="<? echo $a226 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a227" type="text" id="a227"  value="<? echo $a227 ?>" size="5" ></td>
    <td align=center><input name="a228" type="text" id="a228"  value="<? echo $a228 ?>" size="5" ></td>
    <td align=center><input name="a229" type="text" id="a229"  value="<? echo $a229 ?>" size="5" ></td>
   </tr>
</table></td>
   <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.S:</td>
    <td align=center><input name="a230" type="text"  id="a230"  value="<? echo $a230 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a231" type="text" id="a231"  value="<? echo $a231 ?>" size="5" ></td>
    <td align=center><input name="a232" type="text" id="a232"  value="<? echo $a232 ?>" size="5" ></td>
    <td align=center><input name="a233" type="text" id="a233"  value="<? echo $a233 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a234" type="text"  id="a234"  value="<? echo $a234 ?>" size="5" ></td>
    </tr>
</table></td>
   	</tr>
	<tr>
    <td align=center>11 PM</td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.S</td>
    <td align=center><input name="a235" type="text"  id="a235"  value="<? echo $a235 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.CH#:</td>
    <td align=center><input name="a236" type="text" id="a236"  value="<? echo $a236 ?>" size="5" ></td>
    <td align=center><input name="a237" type="text" id="a237"  value="<? echo $a237 ?>" size="5" ></td>
    <td align=center><input name="a238" type="text" id="a238"  value="<? echo $a238 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq. M#:</td>
    <td align=center><input name="a239" type="text" id="a239"  value="<? echo $a239 ?>" size="5" ></td>
    <td align=center><input name="a240" type="text" id="a240"  value="<? echo $a240 ?>" size="5" ></td>
    <td align=center><input name="a241" type="text" id="a241"  value="<? echo $a241 ?>" size="5" ></td>
    <tr>
	<td align=center>P.D.M:</td>
    <td align=center><input name="a242" type="text" id="a242"  value="<? echo $a242 ?>" size="5" ></td>
   </tr>
   <tr>
   <td align=center>P.D.CH:</td>
    <td align=center><input name="a243" type="text" id="a243"  value="<? echo $a243 ?>" size="5" ></td>
   	</tr>
</table></td>
    <td align=center><table width="20" border="2">
	<tr>
    <td align=center>Nº V.A#1</td>
    <td align=center>Nº V.A#2</td>
    <td align=center>Nº V.A#3</td>
    </tr>
	<tr>
    <td align=center><input name="a244" type="text" id="a244"  value="<? echo $a244 ?>" size="5" ></td>
    <td align=center><input name="a245" type="text" id="a245"  value="<? echo $a245 ?>" size="5" ></td>
	<td align=center><input name="a246" type="text" id="a246"  value="<? echo $a246 ?>" size="5" ></td>
   	</tr>
	<tr>
    <td align=center >H X-7 d 1 eq</td>
    <td align=center >H X-8 d 1 eq</td>
	<td align=center >Tiempo de X-7</td>
    </tr>
	<tr>
    <td align=center><input name="a247" type="text" id="a247"  value="<? echo $a247 ?>" size="5" ></td>
    <td align=center><input name="a248" type="text" id="a248"  value="<? echo $a248 ?>" size="5" ></td>
	<td align=center><input name="a249" type="text" id="a249"  value="<? echo $a249 ?>" size="5" ></td>
    </tr>
		
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D</td>
    <td align=center><input name="a250" type="text"  id="a250"  value="<? echo $a250 ?>" size="5" ></td>
    
   	</tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a251" type="text" id="a251"  value="<? echo $a251 ?>" size="5" ></td>
    <td align=center><input name="a252" type="text" id="a252"  value="<? echo $a252 ?>" size="5" ></td>
    <td align=center><input name="a253" type="text" id="a253"  value="<? echo $a253 ?>" size="5" ></td>
   </tr>
	<tr>
    <td align=center>NºV.A</td>
    <td align=center><input name="a254" type="text" id="a254"  value="<? echo $a254 ?>" size="5" ></td>
	</tr>
	<tr>
    <td align=center>Nivel Tanq</td>
    <td align=center><input name="a255" type="text" id="a255"  value="<? echo $a255 ?>" size="5" ></td>
   
   	</tr>
</table></td>
    <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a256" type="text"  id="a256"  value="<? echo $a256 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a257" type="text" id="a257"  value="<? echo $a257 ?>" size="5" ></td>
    <td align=center><input name="a258" type="text" id="a258"  value="<? echo $a258 ?>" size="5" ></td>
    <td align=center><input name="a259" type="text" id="a259"  value="<? echo $a259 ?>" size="5" ></td>
   </tr>
</table></td>
    <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a260" type="text"  id="a260"  value="<? echo $a260 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a261" type="text" id="a261"  value="<? echo $a261 ?>" size="5" ></td>
    <td align=center><input name="a262" type="text" id="a262"  value="<? echo $a262 ?>" size="5" ></td>
    <td align=center><input name="a263" type="text" id="a263"  value="<? echo $a263 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>Q:</td>
    <td align=center><input name="a264" type="text"  id="a264"  value="<? echo $a264 ?>" size="5" ></td>
    </tr>
</table></td>
   <td align=center><table width="50" border="2">
<tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a265" type="text"  id="a265"  value="<? echo $a265 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a266" type="text" id="a266"  value="<? echo $a266 ?>" size="5" ></td>
    <td align=center><input name="a267" type="text" id="a267"  value="<? echo $a267 ?>" size="5" ></td>
    <td align=center><input name="a268" type="text" id="a268"  value="<? echo $a268 ?>" size="5" ></td>
   </tr>
</table></td>
   <td align=center><table width="50" border="2">
    <tr>
    <td align=center>P.S:</td>
    <td align=center><input name="a269" type="text"  id="a269"  value="<? echo $a269 ?>" size="5" ></td>
    </tr>
	<tr>
    <td align=center>Eq.#:</td>
    <td align=center><input name="a270" type="text" id="a270"  value="<? echo $a270 ?>" size="5" ></td>
    <td align=center><input name="a271" type="text" id="a271"  value="<? echo $a271 ?>" size="5" ></td>
    <td align=center><input name="a272" type="text" id="a272"  value="<? echo $a272 ?>" size="5" ></td>
   </tr>
   <tr>
    <td align=center>P.D:</td>
    <td align=center><input name="a273" type="text"  id="a273"  value="<? echo $a273 ?>" size="5" ></td>
    </tr>
</table></td>
   	</tr>
</table>
</table>

<input type="submit" value="Guardar" onClick="this.form.action='apreporte.php'">
<input type="submit" value="Modificar" onClick="this.form.action='mpreporte.php'">
<input type="submit" value="Buscar" onClick="this.form.action='buscarpreporte.php'">
</form>

</html>