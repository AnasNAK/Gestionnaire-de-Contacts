<?php

class Gestiondecontact
{
    private $contacts;

    public function __construct()
    {
        $this->contacts = [];
    }

    public function addContact($name, $number, $email)
    {
        $contact = [
            'name' => $name,
            'number' => $number,
            'email' => $email
        ];

        $this->contacts[] = $contact;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    public function deleteContact($index)
    {
        if (isset($this->contacts[$index])) {
            unset($this->contacts[$index]);
            $this->contacts = array_values($this->contacts);
        }
    }

    public function updateContact($index, $name, $number, $email)
    {
        if (isset($this->contacts[$index])) {
            $this->contacts[$index]['name'] = $name;
            $this->contacts[$index]['number'] = $number;
            $this->contacts[$index]['email'] = $email;
        }
    }
}
