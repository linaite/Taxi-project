<?php

namespace Core;

class View
{
    //Si klase atsakinga uz atvaizdavima overall, paima duomenis ir sujungia juos su template.
    // Ja kurem kad galetume skirtingus duomenis paduot ir skirtingus dalykus atvaizduot.
    //View klase uzmapina duomenu masyva ant template ir su render metodu uzmetam tai ka padavem ant template.
    protected $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * Renders array of $this->>data into template file
     *
     * @param string $template_path
     * @return string HTML
     * @throws Exception
     */
    public function render(string $template_path)
    {
        if (!file_exists($template_path)) {
            throw (new \Exception(("Template with filename: " . "$template_path does not exist")));
        }

        $data = $this->data;

        ob_start();

        require $template_path;

        return ob_get_clean();
    }
}