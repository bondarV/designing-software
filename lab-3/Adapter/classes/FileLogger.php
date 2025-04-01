<?php
namespace classes;

class FileLogger implements IFileLogger {
    private FileWriter $fileWriter;
    private Logger $logger;
    private string $filePath;

    public function __construct(FileWriter $fileWriter, Logger $logger, string $filePath) {
        $this->fileWriter = $fileWriter;
        $this->logger = $logger;
        $this->filePath = $filePath;
    }

    private function captureOutput(callable $logFunction, string $message): string {
        ob_start();
        $logFunction($message);
        $output = ob_get_clean();
        return preg_replace('/\e\[[\d;]+m/', '', trim($output));
    }

    public function log(string $message): void {
        $output = $this->captureOutput([$this->logger, 'log'], $message);
        $this->fileWriter->writeLine($this->filePath,'[LOGGING] '.$output);
    }

    public function error(string $message): void {
        $output = $this->captureOutput([$this->logger, 'error'], $message);
        $this->fileWriter->writeLine($this->filePath,'[ERROR] '.$output);
    }

    public function warn(string $message): void {
        $output = $this->captureOutput([$this->logger, 'warn'], $message);
        $this->fileWriter->writeLine($this->filePath,'[WARNING] '.$output);
    }
}
