<template>
    
	Hola desde VUE
</template>

<script>
export default{
    data(){			
        return {
            game:true,	
            win:false,
            lost:false,
            contador_aciertos:0,
            contador_errores:0,			
            aleatorio:0,			
            palabra_escrita:[],
            botones:[],
            color_botones:[],							
            letras:"ABCDEFGHIJKLMNOPQRSTUVWXYZ",
            frutas:["bacilluscereus","shigellasonnei","penicilliumspp","staphilococcusaureus","candidaalbicans","brucellaabortus","escherichiacoli","aspergillusniger","lactobacilluscasei","streptococcusthermophilus"]
        }
    },	//	End data
    methods:{	
        generarAleatorio:function (){
            this.game = true
            this.win = false
            this.lost=false
            this.palabra_escrita = []
            this.contador_aciertos = 0
            this.contador_errores = 0	
            this.botones = []
            this.color_botones = []			
            this.aleatorio = Math.floor(Math.random() * this.frutas.length)
            //	Crea un array de la misma longitud de
            for (var i=0;i< this.frutas[this.aleatorio].length;i++) {
                this.palabra_escrita.push(' ')
            }	
            
            return this.aleatorio					
        },					
        comparar: function(caracter,posicion){																
            
            if(this.game){

            contadorFlag = 0

            this.botones[posicion] = true;										
            
            for(i=0;i<=this.palabra_generada.length;i++){
                //	Si la letra se encuentra en la palabra
                if(caracter.toLowerCase()==this.palabra_generada[i]){
                 //app.$set(this.palabra_escrita, i, caracter)
                 this.palabra_escrita[i] = caracter
                 contadorFlag++
                 this.contador_aciertos++				     				    	
                }	//	End if					
            }	//	End For

                //	No se encontró la letra
                if(contadorFlag==0){
                    this.color_botones[posicion]='rojo'
                    this.contador_errores++				
                }
                else{
                    
                    this.color_botones[posicion]='verde'					
                }

            if(this.contador_aciertos==this.palabra_generada.length){
                this.win=true
                this.game = false
            }

            if(this.contador_errores==5){
                this.lost = true
                this.game = false
            }
                        
          }	//	End If Game
        
        }	//	End comparar				

        },	//	End methods	
    computed:{
        palabra_generada:function(){										
            return this.frutas[this.aleatorio]				
        },	//	End palabra_generada
            
    },	//	End computed
    created: function(){			
        this.generarAleatorio()				
    }
//	End vue
}
</script>