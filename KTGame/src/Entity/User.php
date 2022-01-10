<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $password;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Gold::class, orphanRemoval: true)]
    private $golds;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Metal::class, orphanRemoval: true)]
    private $metals;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Diamond::class, orphanRemoval: true)]
    private $diamonds;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Soldier::class, orphanRemoval: true)]
    private $soldiers;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: TowerDefense::class, orphanRemoval: true)]
    private $towerDefenses;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Ship::class, orphanRemoval: true)]
    private $ships;

    public function __construct()
    {
        $this->golds = new ArrayCollection();
        $this->metals = new ArrayCollection();
        $this->diamonds = new ArrayCollection();
        $this->soldiers = new ArrayCollection();
        $this->towerDefenses = new ArrayCollection();
        $this->ships = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection|Gold[]
     */
    public function getGolds(): Collection
    {
        return $this->golds;
    }

    public function addGold(Gold $gold): self
    {
        if (!$this->golds->contains($gold)) {
            $this->golds[] = $gold;
            $gold->setUser($this);
        }

        return $this;
    }

    public function removeGold(Gold $gold): self
    {
        if ($this->golds->removeElement($gold)) {
            // set the owning side to null (unless already changed)
            if ($gold->getUser() === $this) {
                $gold->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Metal[]
     */
    public function getMetals(): Collection
    {
        return $this->metals;
    }

    public function addMetal(Metal $metal): self
    {
        if (!$this->metals->contains($metal)) {
            $this->metals[] = $metal;
            $metal->setUser($this);
        }

        return $this;
    }

    public function removeMetal(Metal $metal): self
    {
        if ($this->metals->removeElement($metal)) {
            // set the owning side to null (unless already changed)
            if ($metal->getUser() === $this) {
                $metal->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Diamond[]
     */
    public function getDiamonds(): Collection
    {
        return $this->diamonds;
    }

    public function addDiamond(Diamond $diamond): self
    {
        if (!$this->diamonds->contains($diamond)) {
            $this->diamonds[] = $diamond;
            $diamond->setUser($this);
        }

        return $this;
    }

    public function removeDiamond(Diamond $diamond): self
    {
        if ($this->diamonds->removeElement($diamond)) {
            // set the owning side to null (unless already changed)
            if ($diamond->getUser() === $this) {
                $diamond->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Soldier[]
     */
    public function getSoldiers(): Collection
    {
        return $this->soldiers;
    }

    public function addSoldier(Soldier $soldier): self
    {
        if (!$this->soldiers->contains($soldier)) {
            $this->soldiers[] = $soldier;
            $soldier->setUser($this);
        }

        return $this;
    }

    public function removeSoldier(Soldier $soldier): self
    {
        if ($this->soldiers->removeElement($soldier)) {
            // set the owning side to null (unless already changed)
            if ($soldier->getUser() === $this) {
                $soldier->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TowerDefense[]
     */
    public function getTowerDefenses(): Collection
    {
        return $this->towerDefenses;
    }

    public function addTowerDefense(TowerDefense $towerDefense): self
    {
        if (!$this->towerDefenses->contains($towerDefense)) {
            $this->towerDefenses[] = $towerDefense;
            $towerDefense->setUser($this);
        }

        return $this;
    }

    public function removeTowerDefense(TowerDefense $towerDefense): self
    {
        if ($this->towerDefenses->removeElement($towerDefense)) {
            // set the owning side to null (unless already changed)
            if ($towerDefense->getUser() === $this) {
                $towerDefense->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Ship[]
     */
    public function getShips(): Collection
    {
        return $this->ships;
    }

    public function addShip(Ship $ship): self
    {
        if (!$this->ships->contains($ship)) {
            $this->ships[] = $ship;
            $ship->setUser($this);
        }

        return $this;
    }

    public function removeShip(Ship $ship): self
    {
        if ($this->ships->removeElement($ship)) {
            // set the owning side to null (unless already changed)
            if ($ship->getUser() === $this) {
                $ship->setUser(null);
            }
        }

        return $this;
    }
}
