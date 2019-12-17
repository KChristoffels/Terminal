<?php
    session_start();

    class Terminal {

        public $commands = ["alias", "cat", "cd", "chmod", "chown", "curl", "df", "diff", "echo", "exit"];
        public $responses = [
                    "Give own name to command",
                    "Lists the contents of files",
                    "Command changes your current directory",
                    "Sets the file permissions flags",
                    "Allows you to change owner",
                    "Tool to retrieve information and files from URLs",
                    "Shows the size, used space, and available space on the mounted filesystems on your pc",
                    "Compares two text files",
                    "Prints a string of text to the terminal window",
                    "Will close the terminal window"
        ];
        public $history = [];

        function getResponse ($command) {
            switch ($command) {
                case "alias": $logThis = "{$this->commands[0]}  /  {$this->responses[0]}"; $this->logResponse($logThis);
                                return $this->responses[0];
                                break;
                case "cat":  $logThis = "{$this->commands[1]}  /  {$this->responses[1]}"; $this->logResponse($logThis);
                                return $this->responses[1];
                                break;
                case "cd": $logThis = "{$this->commands[2]}  /  {$this->responses[2]}"; $this->logResponse($logThis);
                                return $this->responses[2];
                                break;
                case "chmod": $logThis = "{$this->commands[3]}  /  {$this->responses[3]}"; $this->logResponse($logThis);
                                return $this->responses[3];
                                break;
                case "chown": $logThis = "{$this->commands[4]}  /  {$this->responses[4]}"; $this->logResponse($logThis);
                                return $this->responses[4];
                                break;
                case "curl": $logThis = "{$this->commands[5]}  /  {$this->responses[5]}"; $this->logResponse($logThis);
                                return $this->responses[5];
                                break;
                case "df": $logThis = "{$this->commands[6]}  /  {$this->responses[6]}"; $this->logResponse($logThis);
                                return $this->responses[6];
                                break;
                case "diff": $logThis = "{$this->commands[7]}  /  {$this->responses[7]}"; $this->logResponse($logThis);
                                return $this->responses[7];
                                break;
                case "echo": $logThis = "{$this->commands[8]}  /  {$this->responses[8]}"; $this->logResponse($logThis);
                                return $this->responses[8];
                                break;
                case "exit": $logThis = "{$this->commands[9]}  /  {$this->responses[9]}"; $this->logResponse($logThis);
                                return $this->responses[9];
                                break;
                default:
                    return "Input doesn't match any command";
            }
        }

        function logResponse(&$logThis) {
            array_push($this->history, $logThis);
        }

    }

?>