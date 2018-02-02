<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslationInterface;

interface BlockTranslationInterface extends ResourceInterface, TranslationInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;

    /**
     * @return string|null
     */
    public function getContent(): ?string;

    /**
     * @param string $content
     */
    public function setContent(?string $content): void;

    /**
     * @return BlockImageInterface|null
     */
    public function getImage(): ?BlockImageInterface;

    /**
     * @param BlockImageInterface $image
     */
    public function setImage(?BlockImageInterface $image): void;

    /**
     * @return string|null
     */
    public function getLink(): ?string;

    /**
     * @param string|null $link
     */
    public function setLink(?string $link): void;
}
