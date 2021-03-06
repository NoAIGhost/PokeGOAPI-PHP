<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/Master/GymBattleSettings.php');

namespace POGOProtos\Settings\Master {

  use Protobuf;
  use ProtobufIO;
  use ProtobufMessage;

  // message POGOProtos.Settings.Master.GymBattleSettings
  final class GymBattleSettings extends ProtobufMessage {

    private $_unknown;
    private $energyPerSec = 0; // optional float energy_per_sec = 1
    private $dodgeEnergyCost = 0; // optional float dodge_energy_cost = 2
    private $retargetSeconds = 0; // optional float retarget_seconds = 3
    private $enemyAttackInterval = 0; // optional float enemy_attack_interval = 4
    private $attackServerInterval = 0; // optional float attack_server_interval = 5
    private $roundDurationSeconds = 0; // optional float round_duration_seconds = 6
    private $bonusTimePerAllySeconds = 0; // optional float bonus_time_per_ally_seconds = 7
    private $maximumAttackersPerBattle = 0; // optional int32 maximum_attackers_per_battle = 8
    private $sameTypeAttackBonusMultiplier = 0; // optional float same_type_attack_bonus_multiplier = 9
    private $maximumEnergy = 0; // optional int32 maximum_energy = 10
    private $energyDeltaPerHealthLost = 0; // optional float energy_delta_per_health_lost = 11
    private $dodgeDurationMs = 0; // optional int32 dodge_duration_ms = 12
    private $minimumPlayerLevel = 0; // optional int32 minimum_player_level = 13
    private $swapDurationMs = 0; // optional int32 swap_duration_ms = 14

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional float energy_per_sec = 1
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->energyPerSec = $tmp;

            break;
          case 2: // optional float dodge_energy_cost = 2
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->dodgeEnergyCost = $tmp;

            break;
          case 3: // optional float retarget_seconds = 3
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->retargetSeconds = $tmp;

            break;
          case 4: // optional float enemy_attack_interval = 4
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->enemyAttackInterval = $tmp;

            break;
          case 5: // optional float attack_server_interval = 5
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->attackServerInterval = $tmp;

            break;
          case 6: // optional float round_duration_seconds = 6
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->roundDurationSeconds = $tmp;

            break;
          case 7: // optional float bonus_time_per_ally_seconds = 7
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->bonusTimePerAllySeconds = $tmp;

            break;
          case 8: // optional int32 maximum_attackers_per_battle = 8
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->maximumAttackersPerBattle = $tmp;

            break;
          case 9: // optional float same_type_attack_bonus_multiplier = 9
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->sameTypeAttackBonusMultiplier = $tmp;

            break;
          case 10: // optional int32 maximum_energy = 10
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->maximumEnergy = $tmp;

            break;
          case 11: // optional float energy_delta_per_health_lost = 11
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->energyDeltaPerHealthLost = $tmp;

            break;
          case 12: // optional int32 dodge_duration_ms = 12
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->dodgeDurationMs = $tmp;

            break;
          case 13: // optional int32 minimum_player_level = 13
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->minimumPlayerLevel = $tmp;

            break;
          case 14: // optional int32 swap_duration_ms = 14
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->swapDurationMs = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->energyPerSec !== 0) {
        fwrite($fp, "\x0d", 1);
        Protobuf::write_float($fp, $this->energyPerSec);
      }
      if ($this->dodgeEnergyCost !== 0) {
        fwrite($fp, "\x15", 1);
        Protobuf::write_float($fp, $this->dodgeEnergyCost);
      }
      if ($this->retargetSeconds !== 0) {
        fwrite($fp, "\x1d", 1);
        Protobuf::write_float($fp, $this->retargetSeconds);
      }
      if ($this->enemyAttackInterval !== 0) {
        fwrite($fp, "%", 1);
        Protobuf::write_float($fp, $this->enemyAttackInterval);
      }
      if ($this->attackServerInterval !== 0) {
        fwrite($fp, "-", 1);
        Protobuf::write_float($fp, $this->attackServerInterval);
      }
      if ($this->roundDurationSeconds !== 0) {
        fwrite($fp, "5", 1);
        Protobuf::write_float($fp, $this->roundDurationSeconds);
      }
      if ($this->bonusTimePerAllySeconds !== 0) {
        fwrite($fp, "=", 1);
        Protobuf::write_float($fp, $this->bonusTimePerAllySeconds);
      }
      if ($this->maximumAttackersPerBattle !== 0) {
        fwrite($fp, "@", 1);
        Protobuf::write_varint($fp, $this->maximumAttackersPerBattle);
      }
      if ($this->sameTypeAttackBonusMultiplier !== 0) {
        fwrite($fp, "M", 1);
        Protobuf::write_float($fp, $this->sameTypeAttackBonusMultiplier);
      }
      if ($this->maximumEnergy !== 0) {
        fwrite($fp, "P", 1);
        Protobuf::write_varint($fp, $this->maximumEnergy);
      }
      if ($this->energyDeltaPerHealthLost !== 0) {
        fwrite($fp, "]", 1);
        Protobuf::write_float($fp, $this->energyDeltaPerHealthLost);
      }
      if ($this->dodgeDurationMs !== 0) {
        fwrite($fp, "`", 1);
        Protobuf::write_varint($fp, $this->dodgeDurationMs);
      }
      if ($this->minimumPlayerLevel !== 0) {
        fwrite($fp, "h", 1);
        Protobuf::write_varint($fp, $this->minimumPlayerLevel);
      }
      if ($this->swapDurationMs !== 0) {
        fwrite($fp, "p", 1);
        Protobuf::write_varint($fp, $this->swapDurationMs);
      }
    }

    public function size() {
      $size = 0;
      if ($this->energyPerSec !== 0) {
        $size += 5;
      }
      if ($this->dodgeEnergyCost !== 0) {
        $size += 5;
      }
      if ($this->retargetSeconds !== 0) {
        $size += 5;
      }
      if ($this->enemyAttackInterval !== 0) {
        $size += 5;
      }
      if ($this->attackServerInterval !== 0) {
        $size += 5;
      }
      if ($this->roundDurationSeconds !== 0) {
        $size += 5;
      }
      if ($this->bonusTimePerAllySeconds !== 0) {
        $size += 5;
      }
      if ($this->maximumAttackersPerBattle !== 0) {
        $size += 1 + Protobuf::size_varint($this->maximumAttackersPerBattle);
      }
      if ($this->sameTypeAttackBonusMultiplier !== 0) {
        $size += 5;
      }
      if ($this->maximumEnergy !== 0) {
        $size += 1 + Protobuf::size_varint($this->maximumEnergy);
      }
      if ($this->energyDeltaPerHealthLost !== 0) {
        $size += 5;
      }
      if ($this->dodgeDurationMs !== 0) {
        $size += 1 + Protobuf::size_varint($this->dodgeDurationMs);
      }
      if ($this->minimumPlayerLevel !== 0) {
        $size += 1 + Protobuf::size_varint($this->minimumPlayerLevel);
      }
      if ($this->swapDurationMs !== 0) {
        $size += 1 + Protobuf::size_varint($this->swapDurationMs);
      }
      return $size;
    }

    public function clearEnergyPerSec() { $this->energyPerSec = 0; }
    public function getEnergyPerSec() { return $this->energyPerSec;}
    public function setEnergyPerSec($value) { $this->energyPerSec = $value; }

    public function clearDodgeEnergyCost() { $this->dodgeEnergyCost = 0; }
    public function getDodgeEnergyCost() { return $this->dodgeEnergyCost;}
    public function setDodgeEnergyCost($value) { $this->dodgeEnergyCost = $value; }

    public function clearRetargetSeconds() { $this->retargetSeconds = 0; }
    public function getRetargetSeconds() { return $this->retargetSeconds;}
    public function setRetargetSeconds($value) { $this->retargetSeconds = $value; }

    public function clearEnemyAttackInterval() { $this->enemyAttackInterval = 0; }
    public function getEnemyAttackInterval() { return $this->enemyAttackInterval;}
    public function setEnemyAttackInterval($value) { $this->enemyAttackInterval = $value; }

    public function clearAttackServerInterval() { $this->attackServerInterval = 0; }
    public function getAttackServerInterval() { return $this->attackServerInterval;}
    public function setAttackServerInterval($value) { $this->attackServerInterval = $value; }

    public function clearRoundDurationSeconds() { $this->roundDurationSeconds = 0; }
    public function getRoundDurationSeconds() { return $this->roundDurationSeconds;}
    public function setRoundDurationSeconds($value) { $this->roundDurationSeconds = $value; }

    public function clearBonusTimePerAllySeconds() { $this->bonusTimePerAllySeconds = 0; }
    public function getBonusTimePerAllySeconds() { return $this->bonusTimePerAllySeconds;}
    public function setBonusTimePerAllySeconds($value) { $this->bonusTimePerAllySeconds = $value; }

    public function clearMaximumAttackersPerBattle() { $this->maximumAttackersPerBattle = 0; }
    public function getMaximumAttackersPerBattle() { return $this->maximumAttackersPerBattle;}
    public function setMaximumAttackersPerBattle($value) { $this->maximumAttackersPerBattle = $value; }

    public function clearSameTypeAttackBonusMultiplier() { $this->sameTypeAttackBonusMultiplier = 0; }
    public function getSameTypeAttackBonusMultiplier() { return $this->sameTypeAttackBonusMultiplier;}
    public function setSameTypeAttackBonusMultiplier($value) { $this->sameTypeAttackBonusMultiplier = $value; }

    public function clearMaximumEnergy() { $this->maximumEnergy = 0; }
    public function getMaximumEnergy() { return $this->maximumEnergy;}
    public function setMaximumEnergy($value) { $this->maximumEnergy = $value; }

    public function clearEnergyDeltaPerHealthLost() { $this->energyDeltaPerHealthLost = 0; }
    public function getEnergyDeltaPerHealthLost() { return $this->energyDeltaPerHealthLost;}
    public function setEnergyDeltaPerHealthLost($value) { $this->energyDeltaPerHealthLost = $value; }

    public function clearDodgeDurationMs() { $this->dodgeDurationMs = 0; }
    public function getDodgeDurationMs() { return $this->dodgeDurationMs;}
    public function setDodgeDurationMs($value) { $this->dodgeDurationMs = $value; }

    public function clearMinimumPlayerLevel() { $this->minimumPlayerLevel = 0; }
    public function getMinimumPlayerLevel() { return $this->minimumPlayerLevel;}
    public function setMinimumPlayerLevel($value) { $this->minimumPlayerLevel = $value; }

    public function clearSwapDurationMs() { $this->swapDurationMs = 0; }
    public function getSwapDurationMs() { return $this->swapDurationMs;}
    public function setSwapDurationMs($value) { $this->swapDurationMs = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('energy_per_sec', $this->energyPerSec, 0)
           . Protobuf::toString('dodge_energy_cost', $this->dodgeEnergyCost, 0)
           . Protobuf::toString('retarget_seconds', $this->retargetSeconds, 0)
           . Protobuf::toString('enemy_attack_interval', $this->enemyAttackInterval, 0)
           . Protobuf::toString('attack_server_interval', $this->attackServerInterval, 0)
           . Protobuf::toString('round_duration_seconds', $this->roundDurationSeconds, 0)
           . Protobuf::toString('bonus_time_per_ally_seconds', $this->bonusTimePerAllySeconds, 0)
           . Protobuf::toString('maximum_attackers_per_battle', $this->maximumAttackersPerBattle, 0)
           . Protobuf::toString('same_type_attack_bonus_multiplier', $this->sameTypeAttackBonusMultiplier, 0)
           . Protobuf::toString('maximum_energy', $this->maximumEnergy, 0)
           . Protobuf::toString('energy_delta_per_health_lost', $this->energyDeltaPerHealthLost, 0)
           . Protobuf::toString('dodge_duration_ms', $this->dodgeDurationMs, 0)
           . Protobuf::toString('minimum_player_level', $this->minimumPlayerLevel, 0)
           . Protobuf::toString('swap_duration_ms', $this->swapDurationMs, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.GymBattleSettings)
  }

}