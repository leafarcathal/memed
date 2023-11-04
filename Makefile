update:
	@docker-compose run --rm composer update --profile -vvv --prefer-dist --ignore-platform-req=ext-rdkafka
analyse:
	@php vendor/bin/deptrac analyse --config-file=depfile.yaml