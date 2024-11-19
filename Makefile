GOOGLEAPIS_PATH := "./googleapis"

all: requirements common ns as-external-api as-external-api as fuota geo gw nc

requirements:
	rm -rf generated
	mkdir -p generated/Chirpstack

common:
	php ./vendor/bin/protobuf --include-descriptors -i ./chirpstack/protobuf -o ./generated/Chirpstack/ ./chirpstack/protobuf/common/common.proto

as-external-api:
	php ./vendor/bin/protobuf --include-descriptors -i ./chirpstack/protobuf -i $(GOOGLEAPIS_PATH) -o ./generated/Chirpstack/ ./chirpstack/protobuf/as/external/api/*.proto

as-integration:
	php ./vendor/bin/protobuf --include-descriptors -i ./chirpstack/protobuf -o ./generated/Chirpstack/ ./chirpstack/protobuf/as/integration/*.proto

as:
	php ./vendor/bin/protobuf --include-descriptors -i ./chirpstack/protobuf -o ./generated/Chirpstack/ ./chirpstack/protobuf/as/*.proto

fuota:
	php ./vendor/bin/protobuf --include-descriptors -i ./chirpstack/protobuf -o ./generated/Chirpstack/ ./chirpstack/protobuf/fuota/*.proto

ns:
	php ./vendor/bin/protobuf --include-descriptors -i ./chirpstack/protobuf -o ./generated/Chirpstack/ ./chirpstack/protobuf/ns/*.proto

geo:
	php ./vendor/bin/protobuf --include-descriptors -i ./chirpstack/protobuf -o ./generated/Chirpstack/ ./chirpstack/protobuf/geo/*.proto

gw:
	php ./vendor/bin/protobuf --include-descriptors -i ./chirpstack/protobuf -o ./generated/Chirpstack/ ./chirpstack/protobuf/gw/*.proto

nc:
	php ./vendor/bin/protobuf --include-descriptors -i ./chirpstack/protobuf -o ./generated/Chirpstack/ ./chirpstack/protobuf/nc/*.proto
