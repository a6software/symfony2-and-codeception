<?php

namespace A6\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="A6\UserBundle\Repository\ProfileRepository")
 * @ORM\Table(name="user_profile")
 */
class Profile
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\Column(type="string", name="first_name")
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", name="middle_name")
     */
    protected $middleName;

    /**
     * @ORM\Column(type="string", name="last_name")
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string", name="job_title")
     */
    protected $jobTitle;

    /**
     * @ORM\Column(type="decimal")
     */
    protected $salary;

    /**
     * @ORM\Column(type="boolean", name="receive_mailing")
     */
    protected $receiveMailing;



    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param mixed $middleName
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param mixed $jobTitle
     * @return $this
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     * @return $this
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceiveMailing()
    {
        return $this->receiveMailing;
    }

    /**
     * @param mixed $receiveMailing
     * @return $this
     */
    public function setReceiveMailing($receiveMailing)
    {
        $this->receiveMailing = $receiveMailing;

        return $this;
    }




}