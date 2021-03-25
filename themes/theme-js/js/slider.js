(function (){		
            let bout = document.querySelectorAll('.rad-carrousel')
			let carrousel = document.querySelector('.carrousel-2')
			let k = 0;
			for (const bt of bout){
				bt.value = k++;
				bout.addEventListener('mousedown', function(){
					carrousel.getElementsByClassName.transform = "translateX(" + (-this.value*100) + "vw)"
				})
			}
        }())   