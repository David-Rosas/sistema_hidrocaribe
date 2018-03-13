var AppLogin = angular.module("AppHidrocaribe",['ngRoute']);
AppLogin.controller('InitLogin', ["$scope","$http","$timeout",function($scope,$http,$timeout) {
    $scope.Login={"User":"","Pass":"","check":false};
    $scope.Msg="";
    $scope.clMsg="MSG";
    $scope.url=[{"lay":"main/view/login/login.html"},{"lay":"main/view/login/forget.html"}]; 
    $scope.LoadInit = function () {
        $scope.LayLogin=$scope.url[0].lay;
    }; 
    $scope.fr={"user":"","pass":"","mante":false};
    $scope.fr_Submit = function(){
        if ($scope.fr.user !="" && $scope.fr.pass != "" ){
            $scope.validate();
        }else{
            $scope.clMsg="MSG-Content animated  flipInX";
            $scope.Msg="Debe ingresar el Usuario, Email y Contraseña para poder ingresar al sistema, si no posee unos comuníquese con el administrador del sistema.";
            $timeout( function(){ $scope.CloseAnim(); }, 3000); 
        }
    };
    
    $scope.validate = function(){
        $http.post("main/controller/login/index.php",{ log:"login", user:$scope.fr.user, pass:$scope.fr.pass })
        .success(function(succ) {
            if(succ.error==true){
                valid=false;
                $scope.clMsg="MSG-Content animated  flipInX";
                $scope.Msg=succ.message;
                $timeout( function(){ $scope.CloseAnim(); }, 10000);                 
            }else{
                location.reload();
            }           
        }).error(function (data,status, headers, config) {
            if (status == 0){
                $scope.clMsg="MSG-Content animated  flipInX";
                $scope.Msg="Sin conexion a internet, verifique que este conectado a una red con internet he intente de nuevo";
                $timeout( function(){ $scope.CloseAnim(); }, 3000); 
            }else if (status == 404){
                $scope.clMsg="MSG-Content animated  flipInX";
                $scope.Msg="Hubo un error al procesar a información, comuníquese con el Administrador del sistema [ error 404 Ajax login ]";
                $timeout( function(){ $scope.CloseAnim(); }, 3000); 
            }
        }); 
    };
    $scope.CloseAnim = function () {
        $scope.clMsg="MSG-Content animated flipOutX";
    };
    
    
}]);
