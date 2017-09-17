<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<65a8605128a51f2de311ecde9aa32a16>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

final class TypeParameter extends EditableSyntax {

  private EditableSyntax $_variance;
  private EditableSyntax $_name;
  private EditableSyntax $_constraints;

  public function __construct(
    EditableSyntax $variance,
    EditableSyntax $name,
    EditableSyntax $constraints,
  ) {
    parent::__construct('type_parameter');
    $this->_variance = $variance;
    $this->_name = $name;
    $this->_constraints = $constraints;
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $variance = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_variance'],
      $position,
      $source,
    );
    $position += $variance->getWidth();
    $name = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_name'],
      $position,
      $source,
    );
    $position += $name->getWidth();
    $constraints = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_constraints'],
      $position,
      $source,
    );
    $position += $constraints->getWidth();
    return new self($variance, $name, $constraints);
  }

  <<__Override>>
  public function getChildren(): KeyedTraversable<string, EditableSyntax> {
    yield 'variance' => $this->_variance;
    yield 'name' => $this->_name;
    yield 'constraints' => $this->_constraints;
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $variance = $this->_variance->rewrite($rewriter, $parents);
    $name = $this->_name->rewrite($rewriter, $parents);
    $constraints = $this->_constraints->rewrite($rewriter, $parents);
    if (
      $variance === $this->_variance &&
      $name === $this->_name &&
      $constraints === $this->_constraints
    ) {
      return $this;
    }
    return new self($variance, $name, $constraints);
  }

  public function getVarianceUNTYPED(): EditableSyntax {
    return $this->_variance;
  }

  public function withVariance(EditableSyntax $value): this {
    if ($value === $this->_variance) {
      return $this;
    }
    return new self($value, $this->_name, $this->_constraints);
  }

  public function hasVariance(): bool {
    return !$this->_variance->isMissing();
  }

  /**
   * @returns Missing | PlusToken | MinusToken
   */
  public function getVariance(): ?EditableToken {
    if ($this->_variance->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableToken::class, $this->_variance);
  }

  /**
   * @returns PlusToken | MinusToken
   */
  public function getVariancex(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->_variance);
  }

  public function getNameUNTYPED(): EditableSyntax {
    return $this->_name;
  }

  public function withName(EditableSyntax $value): this {
    if ($value === $this->_name) {
      return $this;
    }
    return new self($this->_variance, $value, $this->_constraints);
  }

  public function hasName(): bool {
    return !$this->_name->isMissing();
  }

  /**
   * @returns NameToken
   */
  public function getName(): NameToken {
    return TypeAssert\instance_of(NameToken::class, $this->_name);
  }

  public function getConstraintsUNTYPED(): EditableSyntax {
    return $this->_constraints;
  }

  public function withConstraints(EditableSyntax $value): this {
    if ($value === $this->_constraints) {
      return $this;
    }
    return new self($this->_variance, $this->_name, $value);
  }

  public function hasConstraints(): bool {
    return !$this->_constraints->isMissing();
  }

  /**
   * @returns Missing | EditableList
   */
  public function getConstraints(): ?EditableList {
    if ($this->_constraints->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->_constraints);
  }

  /**
   * @returns EditableList
   */
  public function getConstraintsx(): EditableList {
    return TypeAssert\instance_of(EditableList::class, $this->_constraints);
  }
}
