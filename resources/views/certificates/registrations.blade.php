<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Certificate</title>
</head>
<body style="font-family: Times New Roman; position: relative; min-height: 100vh; margin: 0; padding: 0; border: 10px solid #000; box-sizing: border-box;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('./imgs/certificatefinal.jpg'); background-size: 70%; background-position: center; background-repeat: no-repeat; opacity: 0.50; z-index: -1;"></div>

   <div>
    <table>
        <tbody>
            <tr>
                <td style="text-align: center; font-size: 20px; padding-top: 20px; padding-right: 80px; padding-left: 80px;">
                    MEDICAL LABORATORY & CLINICAL SCIENTISTS COUNCIL OF ZIMBABWE
                </td>
                <td style="padding: 20px;">
                    <img src="{{ $qrcode }}" alt="QR Code" style="width: 90px; height: 90px;">
                </td>
            </tr>
        </tbody>
    </table>
   </div>
   <div style="padding: 20px;">
    Certificate No: <span style="font-weight: bold;">{{ $data->certificatenumber }}</span>
   </div>
   <div style="padding-right: 20px;padding-left: 20px;padding-top: 5px;">
    
   
   <table style="width: 100%;">
    <tbody>
      <tr>
        <td style="font-weight: bold;">
            71 Suffolk Road<br>
            Avondale West Harare<br/>
            Tel: +(263)(242)303348<br/>
            Fax: +(263)(242)303348<br/>
            Email: mlcsczimba@gmail.com
        </td>
        <td style="font-weight: bold; text-align: right;">
            P.O. Box A1620<br/>
            Avondale<br/>
            Harare

        </td>
      </tr>
    </tbody>
</table>
<div style="text-align: center;padding-top: 20px; margin-top: 40px;">
    HEALTH PROFESSIONS ACT <br/>
    (Chapter 27:19) <br/>
    <br/>
    <br/>
    <span style="font-weight: bold;font-size: 40px;">REGISTRATION CERTIFICATE</span><br/><br/>
    THIS IS TO CERTIFY THAT<br/><br/><br/>
    
    <div style="font-weight: bold;font-size: 18px;">{{ $data->customerprofession->customer->name }} {{ $data->customerprofession->customer->surname }}</div><br/><br/>
    is registered on the register of <br/><br/><br/>
    <b>{{ $data->customerprofession->profession->name }}</b><br/><br/>
    <b>kept by the Medical Laboratory & Clinical Scientists Council of Zimbabwe in accordance wih the provisions of the Health Professions Act (Chapter 27:19)</b>
    
</div>
<div style="padding-right:20px;padding-left:20px;margin-top:50px;">
    <table style="width: 100%;">
        <tbody>
          <tr>
            <td style="text-align: left; font-weight: bold;">DATE: {{ $data->registrationdate}}<br>REG NO: {{ $data->customerprofession->customer->regnumber }}</td>
            <td style="text-align: right;">
                <div style="text-align: right;">
                    <img src="./imgs/signature.png" alt="Signature" style="width: 70px; height: 70px;"><br/>
                    <span style="font-weight: bold;">REGISTRAR</span><br/>
                       </div>

            </td>
          </tr>
        </tbody>
    </table>
    
</div>
</body>
</html>