# This is a demo repo with some Laravel tips

You can run this tips by cloning this repo and running the following commands

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

The seeder can take a while because of the creation of a huge posts table

## hasMany tip ( route : /hasmany ) 

This tip is a reply on a question posted on twitter regarding the performance tip by Laravel daily ( https://www.youtube.com/watch?v=JOnXX-N96NE )

I replied that retreiving only one field ( for example id ) will make the whereHas query faster, this is particulary the case on big tables, with a lot of columns and data.

If you're using ray it will output the queries to ray but it also outputs to clockwork.

This is the result of this tip , you can see that the query with one field selected on the whereHas query is as fast as the join equivalent

<img src="https://github.com/dietercoopman/tips/blob/main/assets/hasmany.png" width="1024px" >
