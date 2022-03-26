# LAB - Client Side DoS

### Description
Ini adalah repository Lab untuk reproduce Client Side DoS attack berdasarkan pada https://ryochris.my.id/2022/03/25/client-side-dos 

### WAF
WAF akan mendeteksi dan memblokir input yang mengandung string berikut:
- script
- OR
- <
- \> 
- SLEEP
- '
- "
- alert

### Rate limit
Rate limiting mendeteksi adanya percobaan request sebanyak 30 kali dalam kurun waktu 120 detik atau 2 menit.

### Set Up
```
git clone https://github.com/abejads/client-side-dos
cd client-side-dos
php -S 0.0.0.0:80
```
