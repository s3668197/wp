<!DOCTYPE html PUBLIC "Receipt">


<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Receipt</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	
	
</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">Lunardo Cinema
123 Swanston Street
VIC, 3000

Phone: (+61) 123-456-789</textarea>

            <div id="logo">



              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
              </div>
			  <img src='https://titan.csit.rmit.edu.au/~s3668197/media/logo.png' alt='cinema logo'  width='200' height='120'/>
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title">Lunardo Cinema - Purchase Summary</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>00001</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 15, 2009</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>

            </table>
		
		</div>
		
		

		<div id="terms">
		  <h5> Lunardo Terms</h5>
		  <textarea>Prices quoted on this Website are in Australian dollars and include GST where applicable.</textarea>
		</div>
	
	</div>
	
</body>

</html>
