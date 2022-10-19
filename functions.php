<?php
function Grade($a){
					$a2 = (int)($a/10);
					switch($a2) {
						case 10:
						case 9:
						case 8:
							return "A+";
							break;
						case 7:
							return "A";
							break;
						case 6:
							return "A-";
							break;
						case 5:
							return "B";
							break;
						case 4:
							return "C";
							break;
				
						default:
							return "F";
							break;
					}
				}