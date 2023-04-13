<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdersRepository::class)]
class Orders
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column]
    private ?float $quantite = null;

    #[ORM\Column]
    private ?float $total = null;


    #[ORM\OneToMany(mappedBy: 'orders', targetEntity: ItemOrders::class)]
    private Collection $itemOrders;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $reference = null;

    public function __construct()
    {
        $this->itemOrders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getQuantite(): ?float
    {
        return $this->quantite;
    }

    public function setQuantite(float $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    // public function getStripeLineItems()
    // {
    //     $lineItems = [];

    //     foreach($this->getProduits() as $produits){

    //         $line = [
    //                 'price_data' => [
    //                     'currency' => 'eur',
    //                     'unit_amount' => $produits->getPrice(),
    //                     'product_data' => [
    //                         'name' => $pro->getName(),
    //                     ],
    //                 ],
    //                 'quantity' => 1,
    //             ];

    //         $lineItems[] = $line;
    //     }

    //     return $lineItems;
    // }

    /**
     * @return Collection<int, ItemOrders>
     */
    public function getItemOrders(): Collection
    {
        return $this->itemOrders;
    }

    public function addItemOrder(ItemOrders $itemOrder): self
    {
        if (!$this->itemOrders->contains($itemOrder)) {
            $this->itemOrders->add($itemOrder);
            $itemOrder->setOrders($this);
        }

        return $this;
    }

    public function removeItemOrder(ItemOrders $itemOrder): self
    {
        if ($this->itemOrders->removeElement($itemOrder)) {
            // set the owning side to null (unless already changed)
            if ($itemOrder->getOrders() === $this) {
                $itemOrder->setOrders(null);
            }
        }

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }



}
