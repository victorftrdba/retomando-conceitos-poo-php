<?php

class Student {
    public $name, $grade, $media;

    public function __construct(string $name, string $grade, array $grades)
    {
        $this->name = $name;
        $this->grade = $grade;
        $this->media = array_sum($grades) / count($grades);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function getStatus()
    {
        if ($this->media >= 7) {
            $status = "Aprovado!";
        } else {
            $status = "Reprovado!";
        }

        return $status;
    }

    public function showStudent()
    {
        echo "<b>Nome do Estudante</b>: ".$this->name."<br>";
        echo "<b>Série do Estudante</b>: ".$this->grade."<br>";
        echo "<b>Média</b>: ".number_format($this->media, 1, ',', '.')."<br>";
        echo "<b>Situação</b>: ".$this->getStatus()."<br><br>";
    }
}

$student = new Student('Victor', 'Nona Série', ['7', '7']);
$student->showStudent();

$student2 = new Student('João', 'Segundo Ano EM', ['4', '7']);
$student2->showStudent();

$student3 = New Student('Rafaela', 'Terceiro Ano EM', ['5', '9']);
$student3->showStudent();

?>