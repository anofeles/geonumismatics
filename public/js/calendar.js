//--- CALENDAR---
function generate_calendar(divname,yy,mm) {
		//-- print current month's calendar--
		
		var date_now2=new Date();
		var monthnow=date_now2.getMonth()+1;
		var yearnow=date_now2.getYear()+1900;
		var daynow=date_now2.getDate();
		
		if (!yy) {yy=yearnow;}
		if (!mm) {mm=monthnow;}
		
		var date_now=new Date(yy,mm-1,1);
		var sec=date_now.getTime();
		
		
		//-- davadginot kviris romeli dgea--
		var wday=date_now.getDay();
		if (wday==0) {wday=7;}
		month0=date_now.getMonth();
		month=month0;
		var out='';
		for (i=1; i<wday; i++) {
			out+='<td>&nbsp;</td>';
		}
		var dd=new Date();
		while (month==month0) {
			dd.setTime(sec);
			day=dd.getDate();
			wday=dd.getDay();if (wday==0) {wday=7;}
			year=dd.getYear()+1900;	
			month=dd.getMonth();
			month3=month+1;
			
			cl='';
			if (month==month0) {
				if (daynow==day && month3==monthnow && year==yearnow) {
					cl='class="now" ';
				}
				if (calendarmas[year+'-'+month+'-'+day]==1) {
					out+='<td '+cl+'><a href="'+calendar_url+'?date='+year+'-'+month3+'-'+day+'">'+day+'</a></td>';
				} else {
					out+='<td '+cl+' >'+day+'</td>';
				}
				if (wday==7) {out+='</tr><tr>';}
			}
			sec+=24*60*60*1000;
		}
		if (wday<7) {
			for (i=wday; i<=7; i++) {
				out+='<td>&nbsp;</td>';
			}
			out+="</tr>";
		}
		
		var monthmas=new Array('','იანვარი','თებერვალი','მარტი','აპრილი','მაისი','ივნისი','ივლისი','აგვისტო','სექტემბერი','ოქტომბერი','ნოემბერი','დეკემბერი');
		out0='<tr><td colspan=4 class=noborder><div id="select_month"><div id="assistant_div"><a style="color: #000; font-size: 12px;">';
        for (i=1; i<=12; i++) {
            if (mm==i)
            out0+=monthmas[i];
        }
        out0+='</a></div><select style="width:95px;" size=1 name=calendar_month  onChange="generate_calendar(\''+divname+'\',this.form.calendar_year.selectedIndex+'+yearnow+'-1,this.form.calendar_month.selectedIndex+1);">';
		//alert(out0);
		
		for (i=1; i<=12; i++) {
			kk=''; if (mm==i) {kk=' selected';}
			out0+='<option '+kk+'>'+monthmas[i];
		}
		out0+='</select></div></td><td colspan=3 class=noborder><div id="select_year"><div id="assistant_div2"><a style="color: #000; font-size: 12px;">';
        for (i=yearnow-1; i<=yearnow+1; i++) {
            if (yy==i)
            out0+=i;
        }
        out0+='</a></div><select size=1 style="width:58px;" name=calendar_year onChange="generate_calendar(\''+divname+'\',this.form.calendar_year.selectedIndex+'+yearnow+'-1,this.form.calendar_month.selectedIndex+1);">';
		for (i=yearnow-1; i<=yearnow+1; i++) {
			kk=''; if (yy==i) {kk=' selected';}
			out0+='<option '+kk+'>'+i;
		}
		out0+='</select></div></td>';
		//out0+='&nbsp;<input type=button onClick=""generate_calendar(\''+divname+'\',this.form.calendar_year.selectedIndex+'+yearnow+'-1,this.form.calendar_month.selectedIndex+1);"" value="&nbsp;" style="border:1px solid #0b245a;width:20px;padding:0;background:url(/i/calendar-button.gif) no-repeat center left ;">';
		out0+='</td></tr>';
		out0+='<tr class="wkdaynames"><td>ორ</td><td>სა</td><td>ოთ</td><td>ხუ</td><td>პა</td><td>შა</td><td>კვ</td></tr>';
		out='<form><table cellspacing=0 cellpadding=0>'+out0+out+'</table></form>';
		
		document.getElementById(divname).innerHTML=out;
		//alert(out);
		//alert(out);
	}