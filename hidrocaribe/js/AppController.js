var AppCust = angular.module("AppHidrocaribe",['ngRoute','ngAnimate','xeditable','chieffancypants.loadingBar']);

AppCust.config(function($routeProvider) {
    $routeProvider
    .when('/',{templateUrl:'view/main/', controller:'cmain', title:'Principal'} )
    .otherwise({redirectTo: '/'});
});

AppCust.run(['$location', '$rootScope','$templateCache', function($location, $rootScope,$templateCache) {
    $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {
        if (current.hasOwnProperty('$$route')) {
            $rootScope.title = current.$$route.title;
        }
    });
    $rootScope.$on('$viewContentLoaded', function() {
      $templateCache.removeAll();
   });
}]);

AppCust.controller('cmain', ["$scope","$http","$interval","$timeout",function($scope,$http,$interval,$timeout){
    $scope.Msg="";
    $scope.clMsg="MSG";
    $scope.template="";
    $scope.mtem="";
    $scope.mtemwin="";
    $scope.action = function (txt) {
        switch(txt) {
            case "close":
            $http.get("?op=Close",{});
            location.reload();
            break;
            case txt:
            $scope.window(txt);
            break;
        }
    };

    $scope.window = function(txt){
        $scope.mtem="template";
        $scope.mtemwin="animated fadeInLeft";
        $scope.template = "view/template/"+txt+".min.html";
    };
   
    $scope.close = function(){
        $scope.mtemwin="animated fadeOutRight";
        Vint =  $interval(function(){
            $scope.template="";
            $scope.mtem=""; 
            $interval.cancel(Vint); 
        }, 500);      
    };
    
    $scope.msg = function(txt){
        $scope.clMsg="MSG-Content animated  fadeInDown";
        $scope.Msg=txt;
        $timeout( function(){ $scope.close_msg(txt); }, 3000); 
    };
    
    $scope.close_msg = function (txt) {
        $scope.clMsg="MSG-Content animated fadeOutUp";
        $scope.Msg=txt;
    };
}]);

AppCust.controller('ctplantas', ["$scope","$http",function($scope,$http){
    $scope.tplanta={id_tipo_planta:"0",tx_descripcion:"",en_tipo:""};
    $scope.ltplanta=[];
    
    $scope.listar_tipo_planta = function(){
        $http.post("controller/table/index.php",{ porcess:"lista", table:"t_tipo_planta" })
        .success(function(succ) {
            if(succ.error==true){
                $scope.msg(succ.message);             
            }else{
                $scope.ltplanta = succ;
            }     
        }).error(function (data,status, headers, config) {
            if (status == 0){
                $scope.msg("Sin conexion a internet, verifique que este conectado a una red con internet he intente de nuevo");
            }
        });
    };
    
    $scope.getrow = function(id){
        for(i=0; i< $scope.ltplanta.length; i++){
            if($scope.ltplanta[i].id_tipo_planta ==  id){
                $scope.tplanta.id_tipo_planta = $scope.ltplanta[i].id_tipo_planta;
                $scope.tplanta.tx_descripcion = $scope.ltplanta[i].tx_descripcion;
                $scope.tplanta.en_tipo = $scope.ltplanta[i].en_tipo;
            }
        }
    };
    
    $scope.clean = function(){
        $scope.tplanta={id_tipo_planta:"0",tx_descripcion:"",en_tipo:""};
    };
    
    $scope.save = function(){
        $http.post("controller/table/index.php",{ porcess:"save", table:"t_tipo_planta", data:$scope.tplanta, id:$scope.tplanta.id_tipo_planta })
        .success(function(succ) {
            if(succ.error==true){
                $scope.msg(succ.message);             
            }else{
                $scope.ltplanta=[];
                $scope.clean();
                $scope.listar_tipo_planta();
            }     
        }).error(function (data,status, headers, config) {
            if (status == 0){
                $scope.msg("Sin conexion a internet, verifique que este conectado a una red con internet he intente de nuevo");
            }
        });
    };
    
    $scope.delet = function(){
        $http.post("controller/table/index.php",{ porcess:"delete", table:"t_tipo_planta", id:$scope.tplanta.id_tipo_planta, field:"id_tipo_planta" })
        .success(function(succ) {
            if(succ.error==true){
                $scope.msg(succ.message);             
            }else{
                $scope.ltplanta=[];
                $scope.clean();
                $scope.listar_tipo_planta();
            }     
        }).error(function (data,status, headers, config) {
            if (status == 0){
                $scope.msg("Sin conexion a internet, verifique que este conectado a una red con internet he intente de nuevo");
            }
        });
    };
}]);

AppCust.controller('cplantas', ["$scope","$http",function($scope,$http){
    $scope.planta={id_planta:"0",tx_nombre:"",tx_direccion:"",en_tipo_parada:"",fk_tipo_planta:""};
    $scope.lplanta=[];
    
    $scope.listar_planta = function(){
        $http.post("controller/table/index.php",{ porcess:"lista", table:"vw_grid_planta" })
        .success(function(succ) {
            if(succ.error==true){
                $scope.msg(succ.message);             
            }else{
                $scope.lplanta = succ;
            }     
        }).error(function (data,status, headers, config) {
            if (status == 0){
                $scope.msg("Sin conexion a internet, verifique que este conectado a una red con internet he intente de nuevo");
            }
        });
    };
    
    $scope.get_tipoplanta = function(){
        $http.post("controller/table/index.php",{ porcess:"lista", table:"t_tipo_planta" })
        .success(function(succ) {
            if(succ.error==true){
                $scope.msg(succ.message);             
            }else{
                $scope.ltplanta = succ;
            }     
        }).error(function (data,status, headers, config) {
            if (status == 0){
                $scope.msg("Sin conexion a internet, verifique que este conectado a una red con internet he intente de nuevo");
            }
        });
    };
    
    $scope.getrow = function(id){
        for(i=0; i< $scope.lplanta.length; i++){
            if($scope.lplanta[i].id_planta ==  id){
                $scope.planta.id_planta = $scope.lplanta[i].id_planta;
                $scope.planta.tx_nombre = $scope.lplanta[i].tx_nombre;
                $scope.planta.tx_direccion = $scope.lplanta[i].tx_direccion;
                $scope.planta.en_tipo_parada = $scope.lplanta[i].en_tipo_parada;
                $scope.planta.fk_tipo_planta = $scope.lplanta[i].fk_tipo_planta;
            }
        }
    };
    
    $scope.clean = function(){
        $scope.tplanta={id_tipo_planta:"0",tx_descripcion:"",en_tipo:""};
    };
    
    $scope.save = function(){
        $http.post("controller/table/index.php",{ porcess:"save", table:"t_tipo_planta", data:$scope.tplanta, id:$scope.tplanta.id_tipo_planta })
        .success(function(succ) {
            if(succ.error==true){
                $scope.msg(succ.message);             
            }else{
                $scope.ltplanta=[];
                $scope.clean();
                $scope.listar_tipo_planta();
            }     
        }).error(function (data,status, headers, config) {
            if (status == 0){
                $scope.msg("Sin conexion a internet, verifique que este conectado a una red con internet he intente de nuevo");
            }
        });
    };
    
    $scope.delet = function(){
        $http.post("controller/table/index.php",{ porcess:"delete", table:"t_tipo_planta", id:$scope.tplanta.id_tipo_planta, field:"id_tipo_planta" })
        .success(function(succ) {
            if(succ.error==true){
                $scope.msg(succ.message);             
            }else{
                $scope.ltplanta=[];
                $scope.clean();
                $scope.listar_tipo_planta();
            }     
        }).error(function (data,status, headers, config) {
            if (status == 0){
                $scope.msg("Sin conexion a internet, verifique que este conectado a una red con internet he intente de nuevo");
            }
        });
    };
}]);