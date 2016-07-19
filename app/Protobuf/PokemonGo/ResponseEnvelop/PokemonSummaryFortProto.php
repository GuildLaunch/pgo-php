<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : pokemongo.proto
 */


namespace Protobuf\PokemonGo\ResponseEnvelop;

/**
 * Protobuf message : pokemongo.ResponseEnvelop.PokemonSummaryFortProto
 */
class PokemonSummaryFortProto extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * FortSummaryId required string = 1
     *
     * @var string
     */
    protected $FortSummaryId = null;

    /**
     * LastModifiedMs required int64 = 2
     *
     * @var int
     */
    protected $LastModifiedMs = null;

    /**
     * Latitude required double = 3
     *
     * @var float
     */
    protected $Latitude = null;

    /**
     * Longitude required double = 4
     *
     * @var float
     */
    protected $Longitude = null;

    /**
     * Check if 'FortSummaryId' has a value
     *
     * @return bool
     */
    public function hasFortSummaryId()
    {
        return $this->FortSummaryId !== null;
    }

    /**
     * Get 'FortSummaryId' value
     *
     * @return string
     */
    public function getFortSummaryId()
    {
        return $this->FortSummaryId;
    }

    /**
     * Set 'FortSummaryId' value
     *
     * @param string $value
     */
    public function setFortSummaryId($value)
    {
        $this->FortSummaryId = $value;
    }

    /**
     * Check if 'LastModifiedMs' has a value
     *
     * @return bool
     */
    public function hasLastModifiedMs()
    {
        return $this->LastModifiedMs !== null;
    }

    /**
     * Get 'LastModifiedMs' value
     *
     * @return int
     */
    public function getLastModifiedMs()
    {
        return $this->LastModifiedMs;
    }

    /**
     * Set 'LastModifiedMs' value
     *
     * @param int $value
     */
    public function setLastModifiedMs($value)
    {
        $this->LastModifiedMs = $value;
    }

    /**
     * Check if 'Latitude' has a value
     *
     * @return bool
     */
    public function hasLatitude()
    {
        return $this->Latitude !== null;
    }

    /**
     * Get 'Latitude' value
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * Set 'Latitude' value
     *
     * @param float $value
     */
    public function setLatitude($value)
    {
        $this->Latitude = $value;
    }

    /**
     * Check if 'Longitude' has a value
     *
     * @return bool
     */
    public function hasLongitude()
    {
        return $this->Longitude !== null;
    }

    /**
     * Get 'Longitude' value
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * Set 'Longitude' value
     *
     * @param float $value
     */
    public function setLongitude($value)
    {
        $this->Longitude = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if ( ! isset($values['FortSummaryId'])) {
            throw new \InvalidArgumentException('Field "FortSummaryId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['LastModifiedMs'])) {
            throw new \InvalidArgumentException('Field "LastModifiedMs" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['Latitude'])) {
            throw new \InvalidArgumentException('Field "Latitude" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['Longitude'])) {
            throw new \InvalidArgumentException('Field "Longitude" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setFortSummaryId($values['FortSummaryId']);
        $message->setLastModifiedMs($values['LastModifiedMs']);
        $message->setLatitude($values['Latitude']);
        $message->setLongitude($values['Longitude']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PokemonSummaryFortProto',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'FortSummaryId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'LastModifiedMs',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Longitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->FortSummaryId === null) {
            throw new \UnexpectedValueException('Field "\\Protobuf\\PokemonGo\\ResponseEnvelop\\PokemonSummaryFortProto#FortSummaryId" (tag 1) is required but has no value.');
        }

        if ($this->LastModifiedMs === null) {
            throw new \UnexpectedValueException('Field "\\Protobuf\\PokemonGo\\ResponseEnvelop\\PokemonSummaryFortProto#LastModifiedMs" (tag 2) is required but has no value.');
        }

        if ($this->Latitude === null) {
            throw new \UnexpectedValueException('Field "\\Protobuf\\PokemonGo\\ResponseEnvelop\\PokemonSummaryFortProto#Latitude" (tag 3) is required but has no value.');
        }

        if ($this->Longitude === null) {
            throw new \UnexpectedValueException('Field "\\Protobuf\\PokemonGo\\ResponseEnvelop\\PokemonSummaryFortProto#Longitude" (tag 4) is required but has no value.');
        }

        if ($this->FortSummaryId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->FortSummaryId);
        }

        if ($this->LastModifiedMs !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->LastModifiedMs);
        }

        if ($this->Latitude !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeDouble($stream, $this->Latitude);
        }

        if ($this->Longitude !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeDouble($stream, $this->Longitude);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->FortSummaryId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->LastModifiedMs = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->Latitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->Longitude = $reader->readDouble($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->FortSummaryId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->FortSummaryId);
        }

        if ($this->LastModifiedMs !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->LastModifiedMs);
        }

        if ($this->Latitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->Longitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->FortSummaryId = null;
        $this->LastModifiedMs = null;
        $this->Latitude = null;
        $this->Longitude = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Protobuf\PokemonGo\ResponseEnvelop\PokemonSummaryFortProto) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->FortSummaryId = ($message->FortSummaryId !== null) ? $message->FortSummaryId : $this->FortSummaryId;
        $this->LastModifiedMs = ($message->LastModifiedMs !== null) ? $message->LastModifiedMs : $this->LastModifiedMs;
        $this->Latitude = ($message->Latitude !== null) ? $message->Latitude : $this->Latitude;
        $this->Longitude = ($message->Longitude !== null) ? $message->Longitude : $this->Longitude;
    }


}
