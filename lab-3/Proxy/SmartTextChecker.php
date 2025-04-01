<?php


class SmartTextChecker implements ISmartTextReader
{
    public function __construct(public ISmartTextReader $reader)
    {

    }

    public function read(string $path): array
    {
        echo "Відкриття файлу: {$path}\n";
        try{
            echo "Файл успішно прочитано.\n";
            echo "Закриття файлу: {$path}\n";
            $data = $this->reader->read($path);

            $lineCount = count($data);
            $charCount = array_reduce($data, fn($carry, $line) => $carry + count($line), 0);

            echo "Загальна кількість рядків: $lineCount\n";
            echo "Загальна кількість символів: $charCount\n";

        }catch (\Exception $exception){
            echo $exception->getMessage();
        }
        return $data;
    }
}