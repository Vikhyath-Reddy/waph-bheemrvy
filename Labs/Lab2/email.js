var shown=false;
function showOrHideEmail(){
			
			if(shown){
				document.getElementById('email').innerHTML="Show my email";
				shown=false;
			}else{
				var myemail="<a href='mailto:bheemrvy"+"@"+"ucmail.uc.edu'>bheemrvy"+"@"+"ucmail.uc.edu</a>";
				document.getElementById('email').innerHTML=myemail;
				shown=true;
			}
		}