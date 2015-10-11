
			var wert;
			$(document).ready(function(){
				$("#los").click(function(){	
					var erreicht = parseFloat($("#erreichte_punkte").val());
					var grundlage = parseFloat($("#grundlage").val());
					
					if (erreicht>grundlage) {
						var text = "Banana!"
						$("#los").text("Banana!");
						$("#erreichte_punkte").val($("#grundlage").val());
					}
					var erg_prozent = erreicht/grundlage*100;
					
					var ergebnis =  6-5*(erreicht/grundlage) ;
					if (ergebnis) 
					{
						if (ergebnis>1) ergebnis = Math.round(ergebnis*10)/10;
						else ergebnis = 1;
					}
					else ergebnis = 1;
					var num = parseFloat(ergebnis);
					var erg = num.toFixed(1);
					
					var sechziger = {11.7:1,20.0:2,28.3:3,36.7:4,45.0:5,50.0:6,55.0:7,60.0:8,65.0:9,70.0:10,75.0:11,80.0:12,
					         85.0:13,90.0:14,95.0:15 };
					var x = {11.1:1,18.8:2,27.7:3,35.5:4,44.4:5,50.0:6,54.4:7,60.0:8,64.4:9,70.0:10,74.4:11,80.0:12,
					         84.4:13,90.0:14,94.4:15};

					if (grundlage<=60) 
					{
						x = sechziger;
					}
					var pkte = 0.0;
					for (i in x) {
						
					 if (erg_prozent >= parseFloat(i))   {
						console.log("erreicht: " + erreicht + " |grundlage: " + grundlage + " |erg_prozent: " +  erg_prozent + 
						" |i: " + parseFloat(i) + " |x[i]: " + x[i] + " |pkte: " + pkte);
						if (parseFloat(x[i])>pkte) {
							console.log("Neuer Höchstwert: " + parseFloat(x[i]) + " |pkte: " + pkte)
							pkte=parseFloat(x[i]);
						} 
					 }
					  
					}
					$('#linearer_notenschluessel').text(erg);												
					$('#oberstufe').text(pkte);	
					if (erg>4.0) {
						console.log("RED!");
						$('#linearer_notenschluessel').css("color:red");			
					}

					
				});				

			}); 
