up:
	docker-compose up -d

down:
	docker-compose down

stop:
	docker-compose stop

import:
	docker exec -i klinika_db mysql -u user1 --password=dbpassword klinika_db < ./docker/database/import/db.sql

backup:
	docker exec klinika_db /usr/bin/mysqldump -u user1 --password=dbpassword klinika_db > ./docker/database/backups/backup.sql