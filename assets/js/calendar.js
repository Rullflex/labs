

Date.prototype.daysInMonth = function() {
		return 33 - new Date(this.getFullYear(), this.getMonth(), 33).getDate();
	};
var data = new Date();
var max = data.daysInMonth();
var ams_or = data.getDate();
var shab_or = data.getDay();
var skizb = (shab_or + 35 - ams_or) % 7;
var verj = max + skizb;
var amisner =["&#1071;&#1085;&#1074;&#1072;&#1088;&#x044C;","&#1060;&#1077;&#1074;&#1088;&#1072;&#1083;&#x044C;","&#1052;&#1072;&#1088;&#1090;","&#1040;&#1087;&#1088;&#1077;&#1083;&#x044C;","&#1052;&#1072;&#1081; ","&#1048;&#1102;&#1085;&#x044C;","&#1048;&#1102;&#1083;&#x044C;","&#1040;&#1074;&#1075;&#1091;&#1089;&#1090;","&#1057;&#1077;&#1085;&#1090;&#1103;&#1073;&#1088;&#x044C;","&#1054;&#1082;&#1090;&#1103;&#1073;&#1088;&#x044C;","&#1053;&#1086;&#1103;&#1073;&#1088;&#x044C;","&#1044;&#1077;&#1082;&#1072;&#1073;&#1088;&#x044C;"]
var ar = ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""]
var i;
var j;
for(i = skizb; i < verj; i++) ar[i] = i - skizb + 1;
ar[ams_or + skizb - 1] = "<span style ='color: #003470; font-weight: 800; background-color: #ffffff; outline: 3px solid white'>" + ams_or + "</span>"
var table = "";
for(i = 0; i < 6; i++){ 
	table +="<tr>";
	for(j = 0; j < 7; j++) 
		if ((ar[(7*i) + j] > 17 && ar[(7*i) + j] < Number(data.getDate())) || ( Number(data.getMonth()) > 3)) {
			table +="<td><span class='day-passed'>" + ar[(7*i) + j] + "</span></td>";
		}
		else {
			table +="<td>" + ar[(7*i) + j] + "</td>";
		}
			
	table +="</tr>";
}
//cal7.innerHTML += table;
document.write("<tbody><tr><td></td><td id = 'ams' colspan = '6'>" + amisner[data.getMonth()] + "&nbsp; &nbsp; " + data.getFullYear() + "</td></tr><tr><td>&#1055;&#1085;</td><td>&#1042;&#1090;</td><td>&#1057;&#1088;</td><td>&#1063;&#1090;</td><td>&#1055;&#1090;</td><td>&#1057;&#1073;</td><td>&#1042;&#1089;</td></tr>" + table +  "</tbody>")
