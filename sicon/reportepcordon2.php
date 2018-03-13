<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
    $fecha=$_POST["fecha"];
	
    $sql = "SELECT a1 from cordon WHERE fecha='$fecha'";
	$a1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a2 from cordon WHERE fecha='$fecha'";
	$a2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a3 from cordon WHERE fecha='$fecha'";
	$a3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a4 from cordon WHERE fecha='$fecha'";
	$a4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a5 from cordon WHERE fecha='$fecha'";
	$a5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a6 from cordon WHERE fecha='$fecha'";
	$a6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a7 from cordon WHERE fecha='$fecha'";
	$a7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a8 from cordon WHERE fecha='$fecha'";
	$a8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a9 from cordon WHERE fecha='$fecha'";
	$a9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a10 from cordon WHERE fecha='$fecha'";
	$a10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a11 from cordon WHERE fecha='$fecha'";
	$a11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a12 from cordon WHERE fecha='$fecha'";
	$a12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a13 from cordon WHERE fecha='$fecha'";
	$a13 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a14 from cordon WHERE fecha='$fecha'";
	$a14 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a15 from cordon WHERE fecha='$fecha'";
	$a15 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a16 from cordon WHERE fecha='$fecha'";
	$a16 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a17 from cordon WHERE fecha='$fecha'";
	$a17 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a18 from cordon WHERE fecha='$fecha'";
	$a18 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a19 from cordon WHERE fecha='$fecha'";
	$a19 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a20 from cordon WHERE fecha='$fecha'";
	$a20 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a21 from cordon WHERE fecha='$fecha'";
	$a21 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a22 from cordon WHERE fecha='$fecha'";
	$a22 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a23 from cordon WHERE fecha='$fecha'";
	$a23 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a24 from cordon WHERE fecha='$fecha'";
	$a24 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a25 from cordon WHERE fecha='$fecha'";
	$a25 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a26 from cordon WHERE fecha='$fecha'";
	$a26 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a27 from cordon WHERE fecha='$fecha'";
	$a27 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a28 from cordon WHERE fecha='$fecha'";
	$a28 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a29 from cordon WHERE fecha='$fecha'";
	$a29= resultadoIndividual($connection,$sql);
	$sql = "SELECT a30 from cordon WHERE fecha='$fecha'";
	$a30 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a31 from cordon WHERE fecha='$fecha'";
	$a31 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a32 from cordon WHERE fecha='$fecha'";
	$a32 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a33 from cordon WHERE fecha='$fecha'";
	$a33 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a34 from cordon WHERE fecha='$fecha'";
	$a34 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a35 from cordon WHERE fecha='$fecha'";
	$a35 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a36 from cordon WHERE fecha='$fecha'";
	$a36 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a37 from cordon WHERE fecha='$fecha'";
	$a37 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a38 from cordon WHERE fecha='$fecha'";
	$a38 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a39 from cordon WHERE fecha='$fecha'";
	$a39 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a40 from cordon WHERE fecha='$fecha'";
	$a40 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a41 from cordon WHERE fecha='$fecha'";
	$a41 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a42 from cordon WHERE fecha='$fecha'";
	$a42 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a43 from cordon WHERE fecha='$fecha'";
	$a43 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a44 from cordon WHERE fecha='$fecha'";
	$a44 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a45 from cordon WHERE fecha='$fecha'";
	$a45 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a46 from cordon WHERE fecha='$fecha'";
	$a46 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a47 from cordon WHERE fecha='$fecha'";
	$a47 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a48 from cordon WHERE fecha='$fecha'";
	$a48 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a49 from cordon WHERE fecha='$fecha'";
	$a49 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a50 from cordon WHERE fecha='$fecha'";
	$a50 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a51 from cordon WHERE fecha='$fecha'";
	$a51 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a52 from cordon WHERE fecha='$fecha'";
	$a52 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a53 from cordon WHERE fecha='$fecha'";
	$a53 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a54 from cordon WHERE fecha='$fecha'";
	$a54= resultadoIndividual($connection,$sql);
	$sql = "SELECT a55 from cordon WHERE fecha='$fecha'";
	$a55 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a56 from cordon WHERE fecha='$fecha'";
	$a56 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a57 from cordon WHERE fecha='$fecha'";
	$a57 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a58 from cordon WHERE fecha='$fecha'";
	$a58 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a59 from cordon WHERE fecha='$fecha'";
	$a59 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a60 from cordon WHERE fecha='$fecha'";
	$a60 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a61 from cordon WHERE fecha='$fecha'";
	$a61 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a62 from cordon WHERE fecha='$fecha'";
	$a62 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a63 from cordon WHERE fecha='$fecha'";
	$a63 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a64 from cordon WHERE fecha='$fecha'";
	$a64= resultadoIndividual($connection,$sql);
	$sql = "SELECT a65 from cordon WHERE fecha='$fecha'";
	$a65 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a66 from cordon WHERE fecha='$fecha'";
	$a66 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a67 from cordon WHERE fecha='$fecha'";
	$a67 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a68 from cordon WHERE fecha='$fecha'";
	$a68 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a69 from cordon WHERE fecha='$fecha'";
	$a69= resultadoIndividual($connection,$sql);
	$sql = "SELECT a70 from cordon WHERE fecha='$fecha'";
	$a70 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a71 from cordon WHERE fecha='$fecha'";
	$a71 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a72 from cordon WHERE fecha='$fecha'";
	$a72 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a73 from cordon WHERE fecha='$fecha'";
	$a73 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a74 from cordon WHERE fecha='$fecha'";
	$a74 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a75 from cordon WHERE fecha='$fecha'";
	$a75 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a76 from cordon WHERE fecha='$fecha'";
	$a76 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a77 from cordon WHERE fecha='$fecha'";
	$a77 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a78 from cordon WHERE fecha='$fecha'";
	$a78 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a79 from cordon WHERE fecha='$fecha'";
	$a79 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a80 from cordon WHERE fecha='$fecha'";
	$a80 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a81 from cordon WHERE fecha='$fecha'";
	$a81 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a82 from cordon WHERE fecha='$fecha'";
	$a82 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a83 from cordon WHERE fecha='$fecha'";
	$a83 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a84 from cordon WHERE fecha='$fecha'";
	$a84 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a85 from cordon WHERE fecha='$fecha'";
	$a85 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a86 from cordon WHERE fecha='$fecha'";
	$a86 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a87 from cordon WHERE fecha='$fecha'";
	$a87 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a88 from cordon WHERE fecha='$fecha'";
	$a88 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a89 from cordon WHERE fecha='$fecha'";
	$a89 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a90 from cordon WHERE fecha='$fecha'";
	$a90 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a91 from cordon WHERE fecha='$fecha'";
	$a91 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a92 from cordon WHERE fecha='$fecha'";
	$a92 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a93 from cordon WHERE fecha='$fecha'";
	$a93 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a94 from cordon WHERE fecha='$fecha'";
	$a94 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a95 from cordon WHERE fecha='$fecha'";
	$a95 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a96 from cordon WHERE fecha='$fecha'";
	$a96 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a97 from cordon WHERE fecha='$fecha'";
	$a97 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a98 from cordon WHERE fecha='$fecha'";
	$a98 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a99 from cordon WHERE fecha='$fecha'";
	$a99 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a100 from cordon WHERE fecha='$fecha'";
	$a100 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a101 from cordon WHERE fecha='$fecha'";
	$a101 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a102 from cordon WHERE fecha='$fecha'";
	$a102 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a103 from cordon WHERE fecha='$fecha'";
	$a103 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a104 from cordon WHERE fecha='$fecha'";
	$a104 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a105 from cordon WHERE fecha='$fecha'";
	$a105 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a106 from cordon WHERE fecha='$fecha'";
	$a106 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a107 from cordon WHERE fecha='$fecha'";
	$a107 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a108 from cordon WHERE fecha='$fecha'";
	$a108 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a109 from cordon WHERE fecha='$fecha'";
	$a109 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a110 from cordon WHERE fecha='$fecha'";
	$a110 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a111 from cordon WHERE fecha='$fecha'";
	$a111 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a112 from cordon WHERE fecha='$fecha'";
	$a112 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a113 from cordon WHERE fecha='$fecha'";
	$a113 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a114 from cordon WHERE fecha='$fecha'";
	$a114 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a115 from cordon WHERE fecha='$fecha'";
	$a115 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a116 from cordon WHERE fecha='$fecha'";
	$a116 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a117 from cordon WHERE fecha='$fecha'";
	$a117 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a118 from cordon WHERE fecha='$fecha'";
	$a118 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a119 from cordon WHERE fecha='$fecha'";
	$a119 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a120 from cordon WHERE fecha='$fecha'";
	$a120 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a121 from cordon WHERE fecha='$fecha'";
	$a121 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a122 from cordon WHERE fecha='$fecha'";
	$a122 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a123 from cordon WHERE fecha='$fecha'";
	$a123 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a124 from cordon WHERE fecha='$fecha'";
	$a124 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a125 from cordon WHERE fecha='$fecha'";
	$a125 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a126 from cordon WHERE fecha='$fecha'";
	$a126 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a127 from cordon WHERE fecha='$fecha'";
	$a127 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a128 from cordon WHERE fecha='$fecha'";
	$a128 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a129 from cordon WHERE fecha='$fecha'";
	$a129 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a130 from cordon WHERE fecha='$fecha'";
	$a130 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a131 from cordon WHERE fecha='$fecha'";
	$a131 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a132 from cordon WHERE fecha='$fecha'";
	$a132 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a133 from cordon WHERE fecha='$fecha'";
	$a133 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a134 from cordon WHERE fecha='$fecha'";
	$a134 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a135 from cordon WHERE fecha='$fecha'";
	$a135 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a136 from cordon WHERE fecha='$fecha'";
	$a136 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a137 from cordon WHERE fecha='$fecha'";
	$a137 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a138 from cordon WHERE fecha='$fecha'";
	$a138 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a139 from cordon WHERE fecha='$fecha'";
	$a139 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a140 from cordon WHERE fecha='$fecha'";
	$a140 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a141 from cordon WHERE fecha='$fecha'";
	$a141 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a142 from cordon WHERE fecha='$fecha'";
	$a142 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a143 from cordon WHERE fecha='$fecha'";
	$a143 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a144 from cordon WHERE fecha='$fecha'";
	$a144 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a145 from cordon WHERE fecha='$fecha'";
	$a145 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a146 from cordon WHERE fecha='$fecha'";
	$a146 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a147 from cordon WHERE fecha='$fecha'";
	$a147 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a148 from cordon WHERE fecha='$fecha'";
	$a148 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a149 from cordon WHERE fecha='$fecha'";
	$a149 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a150 from cordon WHERE fecha='$fecha'";
	$a150 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a151 from cordon WHERE fecha='$fecha'";
	$a151 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a152 from cordon WHERE fecha='$fecha'";
	$a152 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a153 from cordon WHERE fecha='$fecha'";
	$a153 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a154 from cordon WHERE fecha='$fecha'";
	$a154 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a155 from cordon WHERE fecha='$fecha'";
	$a155 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a156 from cordon WHERE fecha='$fecha'";
	$a156 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a157 from cordon WHERE fecha='$fecha'";
	$a157= resultadoIndividual($connection,$sql);
	$sql = "SELECT a158 from cordon WHERE fecha='$fecha'";
	$a158 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a159 from cordon WHERE fecha='$fecha'";
	$a159 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a160 from cordon WHERE fecha='$fecha'";
	$a160 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a161 from cordon WHERE fecha='$fecha'";
	$a161 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a162 from cordon WHERE fecha='$fecha'";
	$a162 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a163 from cordon WHERE fecha='$fecha'";
	$a163 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a164 from cordon WHERE fecha='$fecha'";
	$a164 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a165 from cordon WHERE fecha='$fecha'";
	$a165 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a166 from cordon WHERE fecha='$fecha'";
	$a166 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a167 from cordon WHERE fecha='$fecha'";
	$a167 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a168 from cordon WHERE fecha='$fecha'";
	$a168 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a169 from cordon WHERE fecha='$fecha'";
	$a169 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a170 from cordon WHERE fecha='$fecha'";
	$a170 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a171 from cordon WHERE fecha='$fecha'";
	$a171 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a172 from cordon WHERE fecha='$fecha'";
	$a172 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a173 from cordon WHERE fecha='$fecha'";
	$a173 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a174 from cordon WHERE fecha='$fecha'";
	$a174 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a175 from cordon WHERE fecha='$fecha'";
	$a175 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a176 from cordon WHERE fecha='$fecha'";
	$a176 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a177 from cordon WHERE fecha='$fecha'";
	$a177 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a178 from cordon WHERE fecha='$fecha'";
	$a178= resultadoIndividual($connection,$sql);
	$sql = "SELECT a179 from cordon WHERE fecha='$fecha'";
	$a179 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a180 from cordon WHERE fecha='$fecha'";
	$a180 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a181 from cordon WHERE fecha='$fecha'";
	$a181 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a182 from cordon WHERE fecha='$fecha'";
	$a182 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a183 from cordon WHERE fecha='$fecha'";
	$a183 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a184 from cordon WHERE fecha='$fecha'";
	$a184 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a185 from cordon WHERE fecha='$fecha'";
	$a185 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a186 from cordon WHERE fecha='$fecha'";
	$a186 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a187 from cordon WHERE fecha='$fecha'";
	$a187 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a188 from cordon WHERE fecha='$fecha'";
	$a188 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a189 from cordon WHERE fecha='$fecha'";
	$a189 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a190 from cordon WHERE fecha='$fecha'";
	$a190 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a191 from cordon WHERE fecha='$fecha'";
	$a191 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a192 from cordon WHERE fecha='$fecha'";
	$a192 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a193 from cordon WHERE fecha='$fecha'";
	$a193 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a194 from cordon WHERE fecha='$fecha'";
	$a194 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a195 from cordon WHERE fecha='$fecha'";
	$a195 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a196 from cordon WHERE fecha='$fecha'";
	$a196 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a197 from cordon WHERE fecha='$fecha'";
	$a197 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a198 from cordon WHERE fecha='$fecha'";
	$a198 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a199 from cordon WHERE fecha='$fecha'";
	$a199 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a200 from cordon WHERE fecha='$fecha'";
	$a200 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a201 from cordon WHERE fecha='$fecha'";
	$a201 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a202 from cordon WHERE fecha='$fecha'";
	$a202 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a203 from cordon WHERE fecha='$fecha'";
	$a203 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a204 from cordon WHERE fecha='$fecha'";
	$a204 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a205 from cordon WHERE fecha='$fecha'";
	$a205 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a206 from cordon WHERE fecha='$fecha'";
	$a206 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a207 from cordon WHERE fecha='$fecha'";
	$a207 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a208 from cordon WHERE fecha='$fecha'";
	$a208 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a209 from cordon WHERE fecha='$fecha'";
	$a209 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a210 from cordon WHERE fecha='$fecha'";
	$a210 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a211 from cordon WHERE fecha='$fecha'";
	$a211 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a212 from cordon WHERE fecha='$fecha'";
	$a212 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a213 from cordon WHERE fecha='$fecha'";
	$a213 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a214 from cordon WHERE fecha='$fecha'";
	$a214 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a215 from cordon WHERE fecha='$fecha'";
	$a215 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a216 from cordon WHERE fecha='$fecha'";
	$a216 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a217 from cordon WHERE fecha='$fecha'";
	$a217 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a218 from cordon WHERE fecha='$fecha'";
	$a218 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a219 from cordon WHERE fecha='$fecha'";
	$a219 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a220 from cordon WHERE fecha='$fecha'";
	$a220 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a221 from cordon WHERE fecha='$fecha'";
	$a221 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a222 from cordon WHERE fecha='$fecha'";
	$a222 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a223 from cordon WHERE fecha='$fecha'";
	$a223 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a224 from cordon WHERE fecha='$fecha'";
	$a224 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a225 from cordon WHERE fecha='$fecha'";
	$a225 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a226 from cordon WHERE fecha='$fecha'";
	$a226 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a227 from cordon WHERE fecha='$fecha'";
	$a227 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a228 from cordon WHERE fecha='$fecha'";
	$a228 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a229 from cordon WHERE fecha='$fecha'";
	$a229 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a230 from cordon WHERE fecha='$fecha'";
	$a230 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a231 from cordon WHERE fecha='$fecha'";
	$a231 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a232 from cordon WHERE fecha='$fecha'";
	$a232 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a233 from cordon WHERE fecha='$fecha'";
	$a233 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a234 from cordon WHERE fecha='$fecha'";
	$a234 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a235 from cordon WHERE fecha='$fecha'";
	$a235 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a236 from cordon WHERE fecha='$fecha'";
	$a236 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a237 from cordon WHERE fecha='$fecha'";
	$a237 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a238 from cordon WHERE fecha='$fecha'";
	$a238 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a239 from cordon WHERE fecha='$fecha'";
	$a239 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a240 from cordon WHERE fecha='$fecha'";
	$a240 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a241 from cordon WHERE fecha='$fecha'";
	$a241 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a242 from cordon WHERE fecha='$fecha'";
	$a242 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts1 from cordon WHERE fecha='$fecha'";
	$ts1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts2 from cordon WHERE fecha='$fecha'";
	$ts2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts3 from cordon WHERE fecha='$fecha'";
	$ts3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts4 from cordon WHERE fecha='$fecha'";
	$ts4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts5 from cordon WHERE fecha='$fecha'";
	$ts5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts6 from cordon WHERE fecha='$fecha'";
	$ts6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts7 from cordon WHERE fecha='$fecha'";
	$ts7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts8 from cordon WHERE fecha='$fecha'";
	$ts8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts9 from cordon WHERE fecha='$fecha'";
	$ts9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts10 from cordon WHERE fecha='$fecha'";
	$ts10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts11 from cordon WHERE fecha='$fecha'";
	$ts11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts12 from cordon WHERE fecha='$fecha'";
	$ts12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts13 from cordon WHERE fecha='$fecha'";
	$ts13 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts14 from cordon WHERE fecha='$fecha'";
	$ts14 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts15 from cordon WHERE fecha='$fecha'";
	$ts15 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts16 from cordon WHERE fecha='$fecha'";
	$ts16 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts17 from cordon WHERE fecha='$fecha'";
	$ts17 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts18 from cordon WHERE fecha='$fecha'";
	$ts18 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts19 from cordon WHERE fecha='$fecha'";
	$ts19 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts20 from cordon WHERE fecha='$fecha'";
	$ts20 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts21 from cordon WHERE fecha='$fecha'";
	$ts21 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts22 from cordon WHERE fecha='$fecha'";
	$ts22 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts23 from cordon WHERE fecha='$fecha'";
	$ts23 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts24 from cordon WHERE fecha='$fecha'";
	$ts24 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts25 from cordon WHERE fecha='$fecha'";
	$ts25 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts26 from cordon WHERE fecha='$fecha'";
	$ts26 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts27 from cordon WHERE fecha='$fecha'";
	$ts27 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts28 from cordon WHERE fecha='$fecha'";
	$ts28 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts29 from cordon WHERE fecha='$fecha'";
	$ts29 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts30 from cordon WHERE fecha='$fecha'";
	$ts30 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts31 from cordon WHERE fecha='$fecha'";
	$ts31 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts32 from cordon WHERE fecha='$fecha'";
	$ts32 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts33 from cordon WHERE fecha='$fecha'";
	$ts33 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts34 from cordon WHERE fecha='$fecha'";
	$ts34 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts35 from cordon WHERE fecha='$fecha'";
	$ts35 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts36 from cordon WHERE fecha='$fecha'";
	$ts36 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts37 from cordon WHERE fecha='$fecha'";
	$ts37 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts38 from cordon WHERE fecha='$fecha'";
	$ts38 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts39 from cordon WHERE fecha='$fecha'";
	$ts39 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts40 from cordon WHERE fecha='$fecha'";
	$ts40 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts41 from cordon WHERE fecha='$fecha'";
	$ts41 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts42 from cordon WHERE fecha='$fecha'";
	$ts42 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts43 from cordon WHERE fecha='$fecha'";
	$ts43 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts44 from cordon WHERE fecha='$fecha'";
	$ts44 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts45 from cordon WHERE fecha='$fecha'";
	$ts45 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts46 from cordon WHERE fecha='$fecha'";
	$ts46 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts47 from cordon WHERE fecha='$fecha'";
	$ts47 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts48 from cordon WHERE fecha='$fecha'";
	$ts48 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts49 from cordon WHERE fecha='$fecha'";
	$ts49 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts50 from cordon WHERE fecha='$fecha'";
	$ts50 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts51 from cordon WHERE fecha='$fecha'";
	$ts51 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts52 from cordon WHERE fecha='$fecha'";
	$ts52 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts53 from cordon WHERE fecha='$fecha'";
	$ts53 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts54 from cordon WHERE fecha='$fecha'";
	$ts54 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts55 from cordon WHERE fecha='$fecha'";
	$ts55 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts56 from cordon WHERE fecha='$fecha'";
	$ts56 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts57 from cordon WHERE fecha='$fecha'";
	$ts57 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts58 from cordon WHERE fecha='$fecha'";
	$ts58 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts59 from cordon WHERE fecha='$fecha'";
	$ts59 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts60 from cordon WHERE fecha='$fecha'";
	$ts60 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts61 from cordon WHERE fecha='$fecha'";
	$ts61 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts62 from cordon WHERE fecha='$fecha'";
	$ts62 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts63 from cordon WHERE fecha='$fecha'";
	$ts63 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts64 from cordon WHERE fecha='$fecha'";
	$ts64 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts65 from cordon WHERE fecha='$fecha'";
	$ts65 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts66 from cordon WHERE fecha='$fecha'";
	$ts66 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts67 from cordon WHERE fecha='$fecha'";
	$ts67 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts68 from cordon WHERE fecha='$fecha'";
	$ts68 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts69 from cordon WHERE fecha='$fecha'";
	$ts69 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts70 from cordon WHERE fecha='$fecha'";
	$ts70 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts71 from cordon WHERE fecha='$fecha'";
	$ts71 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts72 from cordon WHERE fecha='$fecha'";
	$ts72 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts73 from cordon WHERE fecha='$fecha'";
	$ts73 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts74 from cordon WHERE fecha='$fecha'";
	$ts74 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts75 from cordon WHERE fecha='$fecha'";
	$ts75 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts76 from cordon WHERE fecha='$fecha'";
	$ts76 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts77 from cordon WHERE fecha='$fecha'";
	$ts77 = resultadoIndividual($connection,$sql);
	


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
<h2 align="center">P/P "El Cordón"</h2>
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

<table width="500" border="2">
<tr>
    <td align=center></td>
	<td align=center colspan="3"></td>
	<td align=center colspan="2"></td>
    <td align=center colspan="2">Turbiedad(NTU)</td>
    <td align=center colspan="2">Color(Und)</td>
	 <td align=center colspan="4">Dosificaciones(ppm)</td>
    
  </tr>
  <tr>
    <td align=center>Horas</td>
    <td align=center>Linea</td>
    <td align=center>Equipos</td>
    <td align=center>Q.Entrada(l/s)</td>
    <td align=center>Q.Salida(l/s)</td>
    <td align=center>Presión(llb/pulg2)</td>
    <td align=center>Entrada</td>
    <td align=center>Salida</td>
    <td align=center>Entrada</td>
    <td align=center>Salida</td>
    <td align=center>PAC</td>
    <td align=center>Sulf.Al+</td>
    <td align=center>Polimero</td>
    <td align=center>Cloro Residual</td>
  </tr>
  <tr>
    <td rowspan="3">6 am</td>
   <td>Cariaco</td>
    <td><input name="a1" type="text" id="a1" value="<? echo $a1 ?>" size="5"></td>
    <td rowspan="3"><input name="a2" type="text" id="a2" value="<? echo $a2 ?>" size="5"></td>
    <td><input name="a3" type="text" id="a3" value="<? echo $a3 ?>" size="5"></td>
    <td><input name="a4" type="text" id="a4" value="<? echo $a4 ?>" size="5"></td>
    <td rowspan="3"><input name="a5" type="text" id="a5" value="<? echo $a5 ?>" size="5"></td>
    <td><input name="a6" type="text" id="a6" value="<? echo $a6 ?>" size="5"></td>
    <td rowspan="3"><input name="a7" type="text" id="a7" value="<? echo $a7 ?>" size="5"></td>
    <td><input name="a8" type="text" id="a8" value="<? echo $a8 ?>" size="5"></td>
    <td rowspan="3"><input name="a9" type="text" id="a9" value="<? echo $a9 ?>" size="5"></td>
    <td rowspan="3"><input name="a10" type="text" id="a10" value="<? echo $a10 ?>" size="5"></td>
    <td rowspan="3"><input name="a11" type="text" id="a11" value="<? echo $a11 ?>" size="5"></td>
    <td rowspan="3"><input name="a12" type="text" id="a12" value="<? echo $a12 ?>" size="5"></td>
  </tr>
  <tr>
    <td>Casanay</td>
    <td><input name="a13" type="text" id="a13" value="<? echo $a13 ?>" size="5"></td>
    
    <td><input name="a14" type="text" id="a14" value="<? echo $a14 ?>" size="5"></td>
    <td><input name="a15" type="text" id="a15" value="<? echo $a15 ?>" size="5"></td>
    
    <td><input name="a16" type="text" id="a16" value="<? echo $a16 ?>" size="5"></td>
    
    <td><input name="a17" type="text" id="a17" value="<? echo $a17 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a18" type="text" id="a18" value="<? echo $a18 ?>" size="5"></td>
   
    <td><input name="a19" type="text" id="a19" value="<? echo $a19 ?>" size="5"></td>
    <td><input name="a20" type="text" id="a20" value="<? echo $a20 ?>" size="5"></td>
   
    <td><input name="a21" type="text" id="a21" value="<? echo $a21 ?>" size="5"></td>
   
    <td><input name="a22" type="text" id="a22" value="<? echo $a22 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td rowspan="3">8 am</td>
   <td>Cariaco</td>
    <td><input name="a23" type="text" id="a23" value="<? echo $a23 ?>" size="5"></td>
    <td rowspan="3"><input name="a24" type="text" id="a24" value="<? echo $a24 ?>" size="5"></td>
    <td><input name="a25" type="text" id="a25" value="<? echo $a25 ?>" size="5"></td>
    <td><input name="a26" type="text" id="a26" value="<? echo $a26 ?>" size="5"></td>
    <td rowspan="3"><input name="a27" type="text" id="a27" value="<? echo $a27 ?>" size="5"></td>
    <td><input name="a28" type="text" id="a28" value="<? echo $a28 ?>" size="5"></td>
    <td rowspan="3"><input name="a29" type="text" id="a29" value="<? echo $a29 ?>" size="5"></td>
    <td><input name="a30" type="text" id="a30" value="<? echo $a30 ?>" size="5"></td>
    <td rowspan="3"><input name="a31" type="text" id="a31" value="<? echo $a31 ?>" size="5"></td>
    <td rowspan="3"><input name="a32" type="text" id="a32" value="<? echo $a32 ?>" size="5"></td>
    <td rowspan="3"><input name="a33" type="text" id="a33" value="<? echo $a33 ?>" size="5"></td>
    <td rowspan="3"><input name="a34" type="text" id="a34" value="<? echo $a34 ?>" size="5"></td>
  </tr>
  <tr>
    <td>Casanay</td>
    <td><input name="a35" type="text" id="a35" value="<? echo $a35 ?>" size="5"></td>
    
    <td><input name="a36" type="text" id="a36" value="<? echo $a36 ?>" size="5"></td>
    <td><input name="a37" type="text" id="a37" value="<? echo $a37 ?>" size="5"></td>
    
    <td><input name="a38" type="text" id="a38" value="<? echo $a38 ?>" size="5"></td>
    
    <td><input name="a39" type="text" id="a39" value="<? echo $a39 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a40" type="text" id="a40" value="<? echo $a40 ?>" size="5"></td>
   
    <td><input name="a41" type="text" id="a41" value="<? echo $a41 ?>" size="5"></td>
    <td><input name="a42" type="text" id="a42" value="<? echo $a42 ?>" size="5"></td>
   
    <td><input name="a43" type="text" id="a43" value="<? echo $a43 ?>" size="5"></td>
   
    <td><input name="a44" type="text" id="a44" value="<? echo $a44 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td rowspan="3">10 am</td>
   <td>Cariaco</td>
    <td><input name="a45" type="text" id="a45" value="<? echo $a45 ?>" size="5"></td>
    <td rowspan="3"><input name="a46" type="text" id="a46" value="<? echo $a46 ?>" size="5"></td>
    <td><input name="a47" type="text" id="a47" value="<? echo $a47 ?>" size="5"></td>
    <td><input name="a48" type="text" id="a48" value="<? echo $a48 ?>" size="5"></td>
    <td rowspan="3"><input name="a49" type="text" id="a49" value="<? echo $a49 ?>" size="5"></td>
    <td><input name="a50" type="text" id="a50" value="<? echo $a50 ?>" size="5"></td>
    <td rowspan="3"><input name="a51" type="text" id="a51" value="<? echo $a51 ?>" size="5"></td>
    <td><input name="a52" type="text" id="a52" value="<? echo $a52 ?>" size="5"></td>
    <td rowspan="3"><input name="a53" type="text" id="a53" value="<? echo $a53 ?>" size="5"></td>
    <td rowspan="3"><input name="a54" type="text" id="a54" value="<? echo $a54 ?>" size="5"></td>
    <td rowspan="3"><input name="a55" type="text" id="a55" value="<? echo $a55 ?>" size="5"></td>
    <td rowspan="3"><input name="a56" type="text" id="a56" value="<? echo $a56 ?>" size="5"></td>
  </tr>
  <tr>
    <td>Casanay</td>
    <td><input name="a57" type="text" id="a57" value="<? echo $a57 ?>" size="5"></td>
    
    <td><input name="a58" type="text" id="a58" value="<? echo $a58 ?>" size="5"></td>
    <td><input name="a59" type="text" id="a59" value="<? echo $a59 ?>" size="5"></td>
    
    <td><input name="a60" type="text" id="a60" value="<? echo $a60 ?>" size="5"></td>
    
    <td><input name="a61" type="text" id="a61" value="<? echo $a61 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a62" type="text" id="a62" value="<? echo $a62 ?>" size="5"></td>
   
    <td><input name="a63" type="text" id="a63" value="<? echo $a63 ?>" size="5"></td>
    <td><input name="a64" type="text" id="a64" value="<? echo $a64 ?>" size="5"></td>
   
    <td><input name="a65" type="text" id="a65" value="<? echo $a65 ?>" size="5"></td>
   
    <td><input name="a66" type="text" id="a66" value="<? echo $a66 ?>" size="5"></td>
    
    
  </tr>
   <tr>
    <td rowspan="3">12 pm</td>
   <td>Cariaco</td>
    <td><input name="a67" type="text" id="a67" value="<? echo $a67?>" size="5"></td>
    <td rowspan="3"><input name="a68" type="text" id="a68" value="<? echo $a68 ?>" size="5"></td>
    <td><input name="a69" type="text" id="a69" value="<? echo $a69?>" size="5"></td>
    <td><input name="a70" type="text" id="a70" value="<? echo $a70?>" size="5"></td>
    <td rowspan="3"><input name="a71" type="text" id="a71" value="<? echo $a71?>" size="5"></td>
    <td><input name="a72" type="text" id="a72" value="<? echo $a72 ?>" size="5"></td>
    <td rowspan="3"><input name="a73" type="text" id="a73" value="<? echo $a73?>" size="5"></td>
    <td><input name="a74" type="text" id="a74" value="<? echo $a74 ?>" size="5"></td>
    <td rowspan="3"><input name="a75" type="text" id="a75" value="<? echo $a75 ?>" size="5"></td>
    <td rowspan="3"><input name="a76" type="text" id="a76" value="<? echo $a76 ?>" size="5"></td>
    <td rowspan="3"><input name="a77" type="text" id="a77" value="<? echo $a77 ?>" size="5"></td>
    <td rowspan="3"><input name="a78" type="text" id="a78" value="<? echo $a78 ?>" size="5"></td>
  </tr>
  <tr>
    <td>Casanay</td>
    <td><input name="a79" type="text" id="a79" value="<? echo $a79 ?>" size="5"></td>
    
    <td><input name="a80" type="text" id="a80" value="<? echo $a80 ?>" size="5"></td>
    <td><input name="a81" type="text" id="a81" value="<? echo $a81 ?>" size="5"></td>
    
    <td><input name="a82" type="text" id="a82" value="<? echo $a82 ?>" size="5"></td>
    
    <td><input name="a83" type="text" id="a83" value="<? echo $a83 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a84" type="text" id="a84" value="<? echo $a84 ?>" size="5"></td>
   
    <td><input name="a85" type="text" id="a85" value="<? echo $a85 ?>" size="5"></td>
    <td><input name="a86" type="text" id="a86" value="<? echo $a86?>" size="5"></td>
   
    <td><input name="a87" type="text" id="a87" value="<? echo $a87?>" size="5"></td>
   
    <td><input name="a88" type="text" id="a88" value="<? echo $a88?>" size="5"></td>
    
    
  </tr>
   <tr>
    <td rowspan="3">2 pm</td>
   <td>Cariaco</td>
    <td><input name="a89" type="text" id="a89" value="<? echo $a89 ?>" size="5"></td>
    <td rowspan="3"><input name="a90" type="text" id="a90" value="<? echo $a90 ?>" size="5"></td>
    <td><input name="a91" type="text" id="a91" value="<? echo $a91 ?>" size="5"></td>
    <td><input name="a92" type="text" id="a92" value="<? echo $a92 ?>" size="5"></td>
    <td rowspan="3"><input name="a93" type="text" id="a93" value="<? echo $a93 ?>" size="5"></td>
    <td><input name="a94" type="text" id="a94" value="<? echo $a94 ?>" size="5"></td>
    <td rowspan="3"><input name="a95" type="text" id="a95" value="<? echo $a95 ?>" size="5"></td>
    <td><input name="a96" type="text" id="a96" value="<? echo $a96 ?>" size="5"></td>
    <td rowspan="3"><input name="a97" type="text" id="a97" value="<? echo $a97 ?>" size="5"></td>
    <td rowspan="3"><input name="a98" type="text" id="a98" value="<? echo $a98 ?>" size="5"></td>
    <td rowspan="3"><input name="a99" type="text" id="a99" value="<? echo $a99 ?>" size="5"></td>
    <td rowspan="3"><input name="a100" type="text" id="a100" value="<? echo $a100 ?>" size="5"></td>
  </tr>
  <tr>
    <td>Casanay</td>
    <td><input name="a101" type="text" id="a101" value="<? echo $a101 ?>" size="5"></td>
    
    <td><input name="a102" type="text" id="a102" value="<? echo $a102 ?>" size="5"></td>
    <td><input name="a103" type="text" id="a103" value="<? echo $a103 ?>" size="5"></td>
    
    <td><input name="a104" type="text" id="a104" value="<? echo $a104 ?>" size="5"></td>
    
    <td><input name="a105" type="text" id="a105" value="<? echo $a105 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a106" type="text" id="a106" value="<? echo $a106 ?>" size="5"></td>
   
    <td><input name="a107" type="text" id="a107" value="<? echo $a107?>" size="5"></td>
    <td><input name="a108" type="text" id="a108" value="<? echo $a108?>" size="5"></td>
   
    <td><input name="a109" type="text" id="a109" value="<? echo $a109 ?>" size="5"></td>
   
    <td><input name="a110" type="text" id="a110" value="<? echo $a110?>" size="5"></td>
    
    
  </tr>
   <tr>
    <td rowspan="3">4 pm</td>
   <td>Cariaco</td>
    <td><input name="a111" type="text" id="a111" value="<? echo $a111 ?>" size="5"></td>
    <td rowspan="3"><input name="a112" type="text" id="a112" value="<? echo $a112 ?>" size="5"></td>
    <td><input name="a113" type="text" id="a113" value="<? echo $a113 ?>" size="5"></td>
    <td><input name="a114" type="text" id="a114" value="<? echo $a114 ?>" size="5"></td>
    <td rowspan="3"><input name="a115" type="text" id="a115" value="<? echo $a115 ?>" size="5"></td>
    <td><input name="a116" type="text" id="a116" value="<? echo $a116?>" size="5"></td>
    <td rowspan="3"><input name="a117" type="text" id="a117" value="<? echo $a117 ?>" size="5"></td>
    <td><input name="a118" type="text" id="a118" value="<? echo $a118 ?>" size="5"></td>
    <td rowspan="3"><input name="a119" type="text" id="a119" value="<? echo $a119 ?>" size="5"></td>
    <td rowspan="3"><input name="a120" type="text" id="a120" value="<? echo $a120 ?>" size="5"></td>
    <td rowspan="3"><input name="a121" type="text" id="a121" value="<? echo $a121 ?>" size="5"></td>
    <td rowspan="3"><input name="a122" type="text" id="a122" value="<? echo $a122 ?>" size="5"></td>
  </tr>
  <tr>
    <td>Casanay</td>
    <td><input name="a123" type="text" id="a123" value="<? echo $a123 ?>" size="5"></td>
    
    <td><input name="a124" type="text" id="a124" value="<? echo $a124 ?>" size="5"></td>
    <td><input name="a125" type="text" id="a125" value="<? echo $a125 ?>" size="5"></td>
    
    <td><input name="a126" type="text" id="a126" value="<? echo $a126 ?>" size="5"></td>
    
    <td><input name="a127" type="text" id="a127" value="<? echo $a127 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a128" type="text" id="a128" value="<? echo $a128 ?>" size="5"></td>
   
    <td><input name="a129" type="text" id="a129" value="<? echo $a129 ?>" size="5"></td>
    <td><input name="a130" type="text" id="a130" value="<? echo $a130 ?>" size="5"></td>
   
    <td><input name="a131" type="text" id="a131" value="<? echo $a131 ?>" size="5"></td>
   
    <td><input name="a132" type="text" id="a132" value="<? echo $a132 ?>" size="5"></td>
    
    
  </tr>
   <tr>
    <td rowspan="3">6 pm</td>
   <td>Cariaco</td>
    <td><input name="a133" type="text" id="a133" value="<? echo $a133 ?>" size="5"></td>
    <td rowspan="3"><input name="a134" type="text" id="a134" value="<? echo $a134 ?>" size="5"></td>
    <td><input name="a135" type="text" id="a135" value="<? echo $a135 ?>" size="5"></td>
    <td><input name="a136" type="text" id="a136" value="<? echo $a136 ?>" size="5"></td>
    <td rowspan="3"><input name="a137" type="text" id="a137" value="<? echo $a137 ?>" size="5"></td>
    <td><input name="a138" type="text" id="a138" value="<? echo $a138 ?>" size="5"></td>
    <td rowspan="3"><input name="a139" type="text" id="a139" value="<? echo $a139 ?>" size="5"></td>
    <td><input name="a140" type="text" id="a140" value="<? echo $a140 ?>" size="5"></td>
    <td rowspan="3"><input name="a141" type="text" id="a141" value="<? echo $a141 ?>" size="5"></td>
    <td rowspan="3"><input name="a142" type="text" id="a142" value="<? echo $a142 ?>" size="5"></td>
    <td rowspan="3"><input name="a143" type="text" id="a143" value="<? echo $a143 ?>" size="5"></td>
    <td rowspan="3"><input name="a144" type="text" id="a144" value="<? echo $a144 ?>" size="5"></td>
  </tr>
  <tr>
    <td>Casanay</td>
    <td><input name="a145" type="text" id="a145" value="<? echo $a145 ?>" size="5"></td>
    
    <td><input name="a146" type="text" id="a146" value="<? echo $a146 ?>" size="5"></td>
    <td><input name="a147" type="text" id="a147" value="<? echo $a147 ?>" size="5"></td>
    
    <td><input name="a148" type="text" id="a148" value="<? echo $a148 ?>" size="5"></td>
    
    <td><input name="a149" type="text" id="a149" value="<? echo $a149 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a150" type="text" id="a150" value="<? echo $a150 ?>" size="5"></td>
   
    <td><input name="a151" type="text" id="a151" value="<? echo $a151 ?>" size="5"></td>
    <td><input name="a152" type="text" id="a152" value="<? echo $a152 ?>" size="5"></td>
   
    <td><input name="a153" type="text" id="a153" value="<? echo $a153 ?>" size="5"></td>
   
    <td><input name="a154" type="text" id="a154" value="<? echo $a154 ?>" size="5"></td>
    
    
  </tr>
   <tr>
    <td rowspan="3">8 pm</td>
   <td>Cariaco</td>
    <td><input name="a155" type="text" id="a155" value="<? echo $a155 ?>" size="5"></td>
    <td rowspan="3"><input name="a156" type="text" id="a156" value="<? echo $a156 ?>" size="5"></td>
    <td><input name="a157" type="text" id="a157" value="<? echo $a157 ?>" size="5"></td>
    <td><input name="a158" type="text" id="a158" value="<? echo $a158 ?>" size="5"></td>
    <td rowspan="3"><input name="a159" type="text" id="a159" value="<? echo $a159 ?>" size="5"></td>
    <td><input name="a160" type="text" id="a160" value="<? echo $a160 ?>" size="5"></td>
    <td rowspan="3"><input name="a161" type="text" id="a161" value="<? echo $a161 ?>" size="5"></td>
    <td><input name="a162" type="text" id="a162" value="<? echo $a162 ?>" size="5"></td>
    <td rowspan="3"><input name="a163" type="text" id="a163" value="<? echo $a163 ?>" size="5"></td>
    <td rowspan="3"><input name="a164" type="text" id="a164" value="<? echo $a164 ?>" size="5"></td>
    <td rowspan="3"><input name="a165" type="text" id="a165" value="<? echo $a165 ?>" size="5"></td>
    <td rowspan="3"><input name="a166" type="text" id="a166" value="<? echo $a166 ?>" size="5"></td>
  </tr>
  <tr>
    <td>Casanay</td>
    <td><input name="a167" type="text" id="a167" value="<? echo $a167 ?>" size="5"></td>
    
    <td><input name="a168" type="text" id="a168" value="<? echo $a168 ?>" size="5"></td>
    <td><input name="a169" type="text" id="a169" value="<? echo $a169?>" size="5"></td>
    
    <td><input name="a170" type="text" id="a170" value="<? echo $a170 ?>" size="5"></td>
    
    <td><input name="a171" type="text" id="a171" value="<? echo $a171 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a172" type="text" id="a172" value="<? echo $a172 ?>" size="5"></td>
   
    <td><input name="a173" type="text" id="a173" value="<? echo $a173 ?>" size="5"></td>
    <td><input name="a174" type="text" id="a174" value="<? echo $a174 ?>" size="5"></td>
   
    <td><input name="a175" type="text" id="a175" value="<? echo $a175 ?>" size="5"></td>
   
    <td><input name="a176" type="text" id="a176" value="<? echo $a176 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td rowspan="3">12 am</td>
    <td>Cariaco</td>
    <td><input name="a177" type="text" id="a177" value="<? echo $a177 ?>" size="5"></td>
    <td rowspan="3"><input name="a178" type="text" id="a178" value="<? echo $a178 ?>" size="5"></td>
    <td><input name="a179" type="text" id="a179" value="<? echo $a179 ?>" size="5"></td>
    <td><input name="a180" type="text" id="a180" value="<? echo $a180 ?>" size="5"></td>
    <td rowspan="3"><input name="a181" type="text" id="a181" value="<? echo $a181 ?>" size="5"></td>
    <td><input name="a182" type="text" id="a182" value="<? echo $a182 ?>" size="5"></td>
    <td rowspan="3"><input name="a183" type="text" id="a183" value="<? echo $a183 ?>" size="5"></td>
    <td><input name="a184" type="text" id="a184" value="<? echo $a184 ?>" size="5"></td>
    <td rowspan="3"><input name="a185" type="text" id="a185" value="<? echo $a185 ?>" size="5"></td>
    <td rowspan="3"><input name="a186" type="text" id="a186" value="<? echo $a186 ?>" size="5"></td>
    <td rowspan="3"><input name="a187" type="text" id="a187" value="<? echo $a187 ?>" size="5"></td>
    <td rowspan="3"><input name="a188" type="text" id="a188" value="<? echo $a188 ?>" size="5"></td>
    </tr>
    <tr>
    <td>Casanay</td>
    <td><input name="a189" type="text" id="a189" value="<? echo $a189 ?>" size="5"></td>
    
    <td><input name="a190" type="text" id="a190" value="<? echo $a190 ?>" size="5"></td>
    <td><input name="a191" type="text" id="a191" value="<? echo $a191 ?>" size="5"></td>
    
    <td><input name="a192" type="text" id="a192" value="<? echo $a192 ?>" size="5"></td>
    
    <td><input name="a193" type="text" id="a193" value="<? echo $a193 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a194" type="text" id="a194" value="<? echo $a194 ?>" size="5"></td>
   
    <td><input name="a195" type="text" id="a195" value="<? echo $a195 ?>" size="5"></td>
    <td><input name="a196" type="text" id="a196" value="<? echo $a196 ?>" size="5"></td>
   
    <td><input name="a197" type="text" id="a197" value="<? echo $a197 ?>" size="5"></td>
   
    <td><input name="a198" type="text" id="a198" value="<? echo $a198 ?>" size="5"></td>
    
    
  </tr> 
   <tr>
    <td rowspan="3">2 am</td>
   <td>Cariaco</td>
    <td><input name="a199" type="text" id="a199" value="<? echo $a199 ?>" size="5"></td>
    <td rowspan="3"><input name="a200" type="text" id="a200" value="<? echo $a200 ?>" size="5"></td>
    <td><input name="a201" type="text" id="a201" value="<? echo $a201 ?>" size="5"></td>
    <td><input name="a202" type="text" id="a202" value="<? echo $a202 ?>" size="5"></td>
    <td rowspan="3"><input name="a203" type="text" id="a203" value="<? echo $a203 ?>" size="5"></td>
    <td><input name="a204" type="text" id="a204" value="<? echo $a204 ?>" size="5"></td>
    <td rowspan="3"><input name="a205" type="text" id="a205" value="<? echo $a205 ?>" size="5"></td>
    <td><input name="a206" type="text" id="a206" value="<? echo $a206 ?>" size="5"></td>
    <td rowspan="3"><input name="a207" type="text" id="a207" value="<? echo $a207 ?>" size="5"></td>
    <td rowspan="3"><input name="a208" type="text" id="a208" value="<? echo $a208 ?>" size="5"></td>
    <td rowspan="3"><input name="a209" type="text" id="a209" value="<? echo $a209 ?>" size="5"></td>
    <td rowspan="3"><input name="a210" type="text" id="a210" value="<? echo $a210 ?>" size="5"></td>
  </tr>
  <tr>
    <td>Casanay</td>
    <td><input name="a211" type="text" id="a211" value="<? echo $a211 ?>" size="5"></td>
    
    <td><input name="a212" type="text" id="a212" value="<? echo $a212 ?>" size="5"></td>
    <td><input name="a213" type="text" id="a213" value="<? echo $a213 ?>" size="5"></td>
    
    <td><input name="a214" type="text" id="a214" value="<? echo $a214 ?>" size="5"></td>
    
    <td><input name="a215" type="text" id="a215" value="<? echo $a215 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a216" type="text" id="a216" value="<? echo $a216 ?>" size="5"></td>
   
    <td><input name="a217" type="text" id="a217" value="<? echo $a217 ?>" size="5"></td>
    <td><input name="a218" type="text" id="a218" value="<? echo $a218 ?>" size="5"></td>
   
    <td><input name="a219" type="text" id="a219" value="<? echo $a219 ?>" size="5"></td>
   
    <td><input name="a220" type="text" id="a220" value="<? echo $a220 ?>" size="5"></td>
    
    
  </tr>
   <tr>
    <td rowspan="3">4 am</td>
    <td>Cariaco</td>
    <td><input name="a221" type="text" id="a221" value="<? echo $a221 ?>" size="5"></td>
    <td rowspan="3"><input name="a222" type="text" id="a222" value="<? echo $a222 ?>" size="5"></td>
    <td><input name="a223" type="text" id="a223" value="<? echo $a223 ?>" size="5"></td>
    <td><input name="a224" type="text" id="a224" value="<? echo $a224 ?>" size="5"></td>
    <td rowspan="3"><input name="a225" type="text" id="a225" value="<? echo $a225 ?>" size="5"></td>
    <td><input name="a226" type="text" id="a226" value="<? echo $a226 ?>" size="5"></td>
    <td rowspan="3"><input name="a227" type="text" id="a227" value="<? echo $a227 ?>" size="5"></td>
    <td><input name="a228" type="text" id="a228" value="<? echo $a228 ?>" size="5"></td>
    <td rowspan="3"><input name="a229" type="text" id="a229" value="<? echo $a229 ?>" size="5"></td>
    <td rowspan="3"><input name="a230" type="text" id="a230" value="<? echo $a230 ?>" size="5"></td>
    <td rowspan="3"><input name="a231" type="text" id="a231" value="<? echo $a231 ?>" size="5"></td>
    <td rowspan="3"><input name="a232" type="text" id="a232" value="<? echo $a232 ?>" size="5"></td>
  </tr>
  <tr>
    <td>Casanay</td>
    <td><input name="a233" type="text" id="a233" value="<? echo $a233 ?>" size="5"></td>
    <td><input name="a234" type="text" id="a234" value="<? echo $a234 ?>" size="5"></td>
    <td><input name="a235" type="text" id="a235" value="<? echo $a235 ?>" size="5"></td>
    <td><input name="a236" type="text" id="a236" value="<? echo $a236?>" size="5"></td>
    <td><input name="a237" type="text" id="a237" value="<? echo $a237 ?>" size="5"></td>
    
    
  </tr>
  <tr>
    <td>Tanq.San A</td>
    <td><input name="a238" type="text" id="a238" value="<? echo $a238 ?>" size="5"></td>
    <td><input name="a239" type="text" id="a239" value="<? echo $a239 ?>" size="5"></td>
    <td><input name="a240" type="text" id="a240" value="<? echo $a240 ?>" size="5"></td>
    <td><input name="a241" type="text" id="a241" value="<? echo $a241 ?>" size="5"></td>
    <td><input name="a242" type="text" id="a242" value="<? echo $a242 ?>" size="5"></td>
    
    
  </tr>
</table>
  
 <br>
  
 </html>
<table width="50" border="2">
<tr>
    <td align=center></td>
    <td align=center></td>
	<td align=center></td>
    <td align=center>Consumo</td>
    <td align=center>Existencia</td>
    <td align=center>Dosis Promedio</td>
    <td align=center colspan="3">Nº Cilindros</td>
    <td align=center></td>
    <td align=center></td>
    <td align=center></td>
	</tr>
<tr>
    <td align=center></td>
	<td align=center>Sustancias Quimica</td>
	<td align=center>Proveedor</td>
	<td align=center>(Kg/dia)</td> 
    <td align=center>(kg)</td>
    <td align=center>(ppm)</td>
    <td align=center>Llenos</td>
    <td align=center>Vacios</td>
    <td align=center>En Balanza</td>
  </tr>
  <tr>
    <td align=center></td>
    <td align=center>Cloro Cilindros 2000LB</td>
    <td>Pequiven</td>
	<td><input name="ts1" type="text" id="ts1" value="<? echo $ts1 ?>" size="5"></td>
    <td><input name="ts2" type="text" id="ts2" value="<? echo $ts2 ?>" size="5"></td>
    <td><input name="ts3" type="text" id="ts3" value="<? echo $ts3 ?>" size="5"></td>
    <td><input name="ts4" type="text" id="ts4" value="<? echo $ts4 ?>" size="5"></td>
    <td><input name="ts5" type="text" id="ts5" value="<? echo $ts5 ?>" size="5"></td>
    <td><input name="ts6" type="text" id="ts6" value="<? echo $ts6 ?>" size="5"></td>
   </tr>
	
</table>
<br>
<br>

<table width="700" border="2">	
   <tr>
    <td>Sustancia Quimica</td>
    <td>Proveedor</td>
    <td>Consumo(Kg/dia)</td>
    <td>Existencia(Kg)</td>
    <td>Dosis Promedio(ppm)</td>
    <td colspan="3">Nº Cuñetes Existentes</td>
    </tr>
   <tr>
    <td rowspan="3">Hipoclorito de Clacio</td>
    <td><input name="ts7" type="text" id="ts7" value="<? echo $ts7?>" size="20"></td>
    <td><input name="ts8" type="text" id="ts8" value="<? echo $ts8?>" size="5"></td>
    <td><input name="ts9" type="text" id="ts9" value="<? echo $ts9?>" size="5"></td>
    <td><input name="ts10" type="text" id="ts10" value="<? echo $ts10?>" size="5"></td>
    <td><input name="ts11" type="text" id="ts11" value="<? echo $ts11?>" size="5"></td>
  </tr>
  <tr>
   
    <td><input name="ts12" type="text" id="ts12" value="<? echo $ts12?>" size="20"></td>
    <td><input name="ts13" type="text" id="ts13" value="<? echo $ts13?>" size="5"></td>
    <td><input name="ts14" type="text" id="ts14" value="<? echo $ts14?>" size="5"></td>
    <td><input name="ts15" type="text" id="ts15" value="<? echo $ts15?>" size="5"></td>
    <td><input name="ts16" type="text" id="ts16" value="<? echo $ts16?>" size="5"></td>
	</tr>
	
    <td><input name="ts17" type="text" id="ts17" value="<? echo $ts17?>" size="20"></td>
    <td><input name="ts18" type="text" id="ts18" value="<? echo $ts18?>" size="5"></td>
    <td><input name="ts19" type="text" id="ts19" value="<? echo $ts19?>" size="5"></td>
    <td><input name="ts20" type="text" id="ts20" value="<? echo $ts20?>" size="5"></td>
    <td><input name="ts21" type="text" id="ts21" value="<? echo $ts21?>" size="5"></td>
   <tr>
    <td rowspan="3">Policloruro de Aluminio</td>
    <td>Polinor</td>
    <td><input name="ts22" type="text" id="ts22" value="<? echo $ts22?>" size="5"></td>
    <td><input name="ts23" type="text" id="ts23" value="<? echo $ts23?>" size="5"></td>
    <td><input name="ts24" type="text" id="ts24" value="<? echo $ts24?>" size="5"></td>
	<td><input name="ts25" type="text" id="ts25" value="<? echo $ts25?>" size="5"></td>
    </tr>
   
    <td>Fanacor</td>
    <td><input name="ts26" type="text" id="ts26" value="<? echo $ts26?>" size="5"></td>
    <td><input name="ts27" type="text" id="ts27" value="<? echo $ts27?>" size="5"></td>
    <td><input name="ts28" type="text" id="ts28" value="<? echo $ts28?>" size="5"></td>
	<td><input name="ts29" type="text" id="ts29" value="<? echo $ts29?>" size="5"></td>
  <tr>
  
    <td><input name="ts30" type="text" id="ts30" value="<? echo $ts30?>" size="20"></td>
    <td><input name="ts31" type="text" id="ts31" value="<? echo $ts31?>" size="5"></td>
    <td><input name="ts32" type="text" id="ts32" value="<? echo $ts32?>" size="5"></td>
    <td><input name="ts33" type="text" id="ts33" value="<? echo $ts33?>" size="5"></td>
	<td><input name="ts34" type="text" id="ts34" value="<? echo $ts34?>" size="5"></td>
	</tr>
    <td rowspan="3">Sulfato de Aluminio</td>
    <td>Ferralca</td>
    <td><input name="ts35" type="text" id="ts35" value="<? echo $ts35?>" size="5"></td>
    <td><input name="ts36" type="text" id="ts36" value="<? echo $ts36?>" size="5"></td>
    <td><input name="ts37" type="text" id="ts37" value="<? echo $ts37?>" size="5"></td>
	<td><input name="ts38" type="text" id="ts38" value="<? echo $ts38?>" size="5"></td>
    </tr>
	<tr>
	
    <td>A.M.V.</td>
    <td><input name="ts39" type="text" id="ts39" value="<? echo $ts39?>" size="5"></td>
    <td><input name="ts40" type="text" id="ts40" value="<? echo $ts40?>" size="5"></td>
    <td><input name="ts41" type="text" id="ts41" value="<? echo $ts41?>" size="5"></td>
	<td><input name="ts42" type="text" id="ts42" value="<? echo $ts42?>" size="5"></td>
	</tr>
  	<tr>
	
    <td><input name="ts43" type="text" id="ts43" value="<? echo $ts43?>" size="20"></td>
    <td><input name="ts44" type="text" id="ts44" value="<? echo $ts44?>" size="5"></td>
    <td><input name="ts45" type="text" id="ts45" value="<? echo $ts45?>" size="5"></td>
    <td><input name="ts46" type="text" id="ts46" value="<? echo $ts46?>" size="5"></td>
	<td><input name="ts47" type="text" id="ts47" value="<? echo $ts47?>" size="5"></td>
	</tr>
	<tr>
     <td rowspan="3">Polimero</td>
    <td><input name="ts48" type="text" id="ts48" value="<? echo $ts48?>" size="20"></td>
    <td><input name="ts49" type="text" id="ts49" value="<? echo $ts49?>" size="5"></td>
    <td><input name="ts50" type="text" id="ts50" value="<? echo $ts50?>" size="5"></td>
    <td><input name="ts51" type="text" id="ts51" value="<? echo $ts51?>" size="5"></td>
	<td><input name="ts52" type="text" id="ts52" value="<? echo $ts52?>" size="5"></td>
  </tr>
  <tr>
	
    <td><input name="ts53" type="text" id="ts53" value="<? echo $ts53?>" size="20"></td>
    <td><input name="ts54" type="text" id="ts54" value="<? echo $ts54?>" size="5"></td>
    <td><input name="ts55" type="text" id="ts55" value="<? echo $ts55?>" size="5"></td>
    <td><input name="ts56" type="text" id="ts56" value="<? echo $ts56?>" size="5"></td>
	<td><input name="ts57" type="text" id="ts57" value="<? echo $ts57?>" size="5"></td>
	</tr>
	<tr>
	
    <td><input name="ts58" type="text" id="ts58" value="<? echo $ts58?>" size="20"></td>
    <td><input name="ts59" type="text" id="ts59" value="<? echo $ts59?>" size="5"></td>
    <td><input name="ts60" type="text" id="ts60" value="<? echo $ts60?>" size="5"></td>
    <td><input name="ts61" type="text" id="ts61" value="<? echo $ts61?>" size="5"></td>
	<td><input name="ts62" type="text" id="ts62" value="<? echo $ts62?>" size="5"></td>
	</tr>
  <tr>
    <td rowspan="3">Cal Hidratada</td>
    <td><input name="ts63" type="text" id="ts63" value="<? echo $ts63?>" size="20"></td>
    <td><input name="ts64" type="text" id="ts64" value="<? echo $ts64?>" size="5"></td>
    <td><input name="ts65" type="text" id="ts65" value="<? echo $ts65?>" size="5"></td>
    <td><input name="ts66" type="text" id="ts66" value="<? echo $ts66?>" size="5"></td>
	<td><input name="ts67" type="text" id="ts67" value="<? echo $ts67?>" size="5"></td>
  </tr>
  <tr>
	
    <td><input name="ts68" type="text" id="ts68" value="<? echo $ts68?>" size="20"></td>
    <td><input name="ts69" type="text" id="ts69" value="<? echo $ts69?>" size="5"></td>
    <td><input name="ts70" type="text" id="ts70" value="<? echo $ts70?>" size="5"></td>
    <td><input name="ts71" type="text" id="ts71" value="<? echo $ts71?>" size="5"></td>
	<td><input name="ts72" type="text" id="ts72" value="<? echo $ts72?>" size="5"></td>
	</tr>
	<tr>
	
    <td><input name="ts73" type="text" id="ts73" value="<? echo $ts73?>" size="20"></td>
    <td><input name="ts74" type="text" id="ts74" value="<? echo $ts74?>" size="5"></td>
    <td><input name="ts75" type="text" id="ts75" value="<? echo $ts75?>" size="5"></td>
    <td><input name="ts76" type="text" id="ts76" value="<? echo $ts76?>" size="5"></td>
	<td><input name="ts77" type="text" id="ts77" value="<? echo $ts77?>" size="5"></td>
	</tr>
 
 </table>
 
<input type="submit" value="Buscar" onClick="this.form.action='rbreportepcordon.php'">
</form>



