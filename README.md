# BPJS Bridging Vclaim, APlicare & Pcare for Laravel

### Installation

```sh
composer require mysundoro/bridging-bpjs-laravel
```

### use for PCare

add to `.env` file

```env
BPJS_PCARE_CONSID="2112121"
BPJS_PCARE_SCREET_KEY="121212121"
BPJS_PCARE_USERNAME="username"
BPJS_PCARE_PASSWORD="password"
BPJS_PCARE_APP_CODE="095"
BPJS_PCARE_BASE_URL="https://dvlp.bpjs-kesehatan.go.id:9081"
BPJS_PCARE_SERVICE_NAME="pcare-rest-v3.0"

use MySundoro\Bpjs\PCare;